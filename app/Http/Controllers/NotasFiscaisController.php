<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

/**
 * @OA\Info(
 *      title="DeliverGenius",
 *      version="1.0.0",
 *      description="Faz a integração com outra API e processa os dados, agrupando e possibilitando a busca por remetente.",
 *      @OA\Contact(
 *          email="williambertoldob@gmail.com",
 *          name="William Bertoldo"
 *      )
 * )
 */
class NotasFiscaisController extends Controller
{
        /**
         * @OA\Get(
         *      path="/processar-notas",
         *      operationId="processarNotas",
         *      tags={"Notas Fiscais"},
         *      summary="Processar notas fiscais",
         *      description="Agrupa notas, calcula valores, etc.",
         *      @OA\Response(
         *          response=200,
         *          description="Operação bem-sucedida"
         *      ),
         *      @OA\Response(
         *          response=400,
         *          description="Requisição inválida"
         *      )
         * )
         */
    public function processarNotas()
    {
        $response = Http::get('http://homologacao3.azapfy.com.br/api/ps/notas');

        if ($response->successful()) {
            $notasFiscais = $response->json();

            $notasAgrupadasPorRemetente = collect($notasFiscais)->groupBy('cnpj_remete');

            $informacoesFinais = [];

            foreach ($notasAgrupadasPorRemetente as $cnpjRemetente => $notas) {
                $valorTotal = $notas->sum('valor');
                $valorRecebido = $notas->where('status', 'COMPROVADO')->sum('valor');
                $valorPendente = $notas->where('status', 'ABERTO')->sum('valor');
            
                $notasAtrasadas = $notas->where('status', 'COMPROVADO')->filter(function ($nota) {
                    return strtotime($nota['dt_entrega']) > strtotime($nota['dt_emis']) + 2 * 24 * 60 * 60;
                });
            
                $valorAtrasado = $notasAtrasadas->sum('valor');
            
                $informacoesFinais[] = [
                    'cnpj_remetente' => $cnpjRemetente,
                    'valor_total' => $valorTotal,
                    'valor_recebido' => $valorRecebido,
                    'valor_pendente' => $valorPendente,
                    'valor_atrasado' => $valorAtrasado,
                    'nome_destinatario' => $notas[0]['dest']['nome'],
                    'nome_transportadora' => $notas[0]['nome_transp'],
                ];
            }
            

            return response()->json($informacoesFinais);
        } else {
            return response()->json(['error' => 'Falha ao obter as notas fiscais'], $response->status());
        }
    }
    /**
     * @OA\Get(
     *      path="/buscar-por-remetente/{cnpj}",
     *      operationId="buscarPorRemetente",
     *      tags={"Notas Fiscais"},
     *      summary="Buscar notas fiscais por remetente",
     *      description="Retorna as notas fiscais de um remetente específico",
     *      @OA\Parameter(
     *          name="cnpj",
     *          in="path",
     *          description="CNPJ do remetente",
     *          required=true,
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Operação bem-sucedida"
     *      ),
     *      @OA\Response(
     *          response=400,
     *          description="Requisição inválida"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Nenhuma nota fiscal encontrada para o CNPJ especificado"
     *      )
     * )
     */
    public function buscarPorRemetente($cnpj)
    {
    $response = Http::get('http://homologacao3.azapfy.com.br/api/ps/notas');

    if ($response->successful()) {
        $notasFiscais = $response->json();

        $notasDoRemetente = collect($notasFiscais)->where('cnpj_remete', $cnpj);

        if ($notasDoRemetente->isNotEmpty()) {
            return response()->json($notasDoRemetente);
        } else {
            return response()->json(['error' => 'Nenhuma nota fiscal encontrada para o CNPJ especificado'], 404);
        }
    } else {
        return response()->json(['error' => 'Falha ao obter as notas fiscais'], $response->status());
    }
}
}
