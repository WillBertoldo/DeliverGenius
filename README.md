<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


##About the API/Sobre a API

For correct operation you need an API for integration with a data structure like the example below and the path to the API must be changed to yours in the NotasFiscalsController.php methods
Para o correto funcionamento é necessária uma API para integração com uma estrutura de dados como o exemplo abaixo e o caminho da API deve ser alterado para o seu nos métodos NotasFiscalsController.php


[
    {
        "chave": "55200423326986000190000309355",
        "numero": "000309355",
        "dest": {
            "nome": "TERRITORIAL TRANSPORTES E EMPREEDIMENTOS",
            "cod": "03889255000145"
        },
        "cnpj_remete": "23326986000190",
        "nome_remete": "CARVALHO ONIBUS LTDA",
        "nome_transp": "CARVALHO PECAS E ONIBUS",
        "cnpj_transp": "23326986000190",
        "status": "COMPROVADO",
        "valor": "100.00",
        "volumes": "2",
        "dt_emis": "16/04/2020 15:51:24",
        "dt_entrega": "17/04/2020 20:11:00"
    },
    {
        "chave": "55200423326986000190000309356",
        "numero": "000309356",
        "dest": {
            "nome": "TERRITORIAL TRANSPORTES E EMPREEDIMENTOS",
            "cod": "03889255000226"
        },
        "cnpj_remete": "23326986000190",
        "nome_remete": "CARVALHO ONIBUS LTDA",
        "nome_transp": "CARVALHO PECAS E ONIBUS",
        "cnpj_transp": "23326986000190",
        "status": "COMPROVADO",
        "valor": "110.47",
        "volumes": "2",
        "dt_emis": "16/04/2020 15:51:39",
        "dt_entrega": "17/04/2020 10:51:39"
    },
    {
        "chave": "55200423326986000190000309347",
        "numero": "000309347",
        "dest": {
            "nome": "SANTOS DUMONT TRANSPORTES EIRELI",
            "cod": "22900414000100"
        },
        "cnpj_remete": "23326986000190",
        "nome_remete": "CARVALHO ONIBUS LTDA",
        "nome_transp": "CARVALHO PECAS E ONIBUS",
        "cnpj_transp": "23326986000190",
        "status": "ABERTO",
        "valor": "348.60",
        "volumes": "1",
        "dt_emis": "16/04/2020 15:04:13"
    },
    {
        "chave": "55200423326986000190000309349",
        "numero": "000309349",
        "dest": {
            "nome": "EMPRESA SAO GONCALO LTDA",
            "cod": "19792977000117"
        },
        "cnpj_remete": "23326986000190",
        "nome_remete": "CARVALHO ONIBUS LTDA",
        "nome_transp": "CARVALHO PECAS E ONIBUS",
        "cnpj_transp": "23326986000190",
        "status": "COMPROVADO",
        "valor": "209.00",
        "volumes": "1",
        "dt_emis": "16/04/2020 15:05:18",
        "dt_entrega": "19/04/2020 09:05:18"
    },
    {
        "chave": "55200466438011000166003473488",
        "numero": "003473488",
        "dest": {
            "cod": "10636110000106",
            "nome": "HUGO ADRIANO LIDUARIO"
        },
        "cnpj_remete": "66438011000166",
        "nome_remete": "DIST CENTRO OESTE DE MEDICAMENTOS L",
        "nome_transp": "PH LOGISTICA LTDA",
        "cnpj_transp": "12227730000109",
        "status": "COMPROVADO",
        "valor": "295.54",
        "volumes": "5",
        "dt_emis": "09/04/2020 13:00:05",
        "dt_entrega": "15/04/2020 23:51:23"
    },
    {
        "chave": "55200466438011000166003474193",
        "numero": "003474193",
        "dest": {
            "cod": "13372913000180",
            "nome": "DROG. E DRUGSTORE SOUZA LTDA - ME"
        },
        "cnpj_remete": "66438011000166",
        "nome_remete": "DIST CENTRO OESTE DE MEDICAMENTOS L",
        "nome_transp": "PH LOGISTICA LTDA",
        "cnpj_transp": "12227730000109",
        "status": "COMPROVADO",
        "valor": "64.35",
        "volumes": "1",
        "dt_emis": "13/04/2020 13:00:05",
        "dt_entrega": "18/04/2020 11:12:14"
    },
    {
        "chave": "55200466438011000166003477786",
        "numero": "003477786",
        "dest": {
            "cod": "09396401000853",
            "nome": "M.H.L DROGARIA LTDA - ME"
        },
        "cnpj_remete": "66438011000166",
        "nome_remete": "DIST CENTRO OESTE DE MEDICAMENTOS L",
        "nome_transp": "PH LOGISTICA LTDA",
        "cnpj_transp": "12227730000109",
        "status": "ABERTO",
        "valor": "205.38",
        "volumes": "13",
        "dt_emis": "15/04/2020 13:00:05"
    },
    {
        "chave": "55200344463156002128000905124",
        "numero": "000905124",
        "dest": {
            "cod": "23439696000152",
            "nome": "39505 - DROGARIA FARIA EAMP VALADARES LTDA - ME"
        },
        "cnpj_remete": "44463156002128",
        "nome_remete": "SERVIMED COMERCIAL LTDA",
        "nome_transp": "PH LOGISTICA LTDA",
        "cnpj_transp": "12227730000109",
        "status": "ABERTO",
        "valor": "187.33",
        "volumes": "3",
        "dt_emis": "31/03/2020 13:00:05"
    },
    {
        "chave": "55200344463156002128000905498",
        "numero": "000905498",
        "dest": {
            "cod": "23439696000233",
            "nome": "DROGARIA FARIA VALADARES LTDA"
        },
        "cnpj_remete": "44463156002128",
        "nome_remete": "SERVIMED COMERCIAL LTDA",
        "nome_transp": "PH LOGISTICA LTDA",
        "cnpj_transp": "12227730000109",
        "status": "COMPROVADO",
        "valor": "136.16",
        "volumes": "2",
        "dt_emis": "30/03/2020 13:00:05",
        "dt_entrega": "31/03/2020 15:00:05"
    },
    {
        "chave": "55200344463156002128000906164",
        "numero": "000906164",
        "dest": {
            "cod": "11486048000178",
            "nome": "PEDRO MUSSOLINE DE CARVALHO NETO EIRELI ME"
        },
        "cnpj_remete": "44463156002128",
        "nome_remete": "SERVIMED COMERCIAL LTDA",
        "nome_transp": "PH LOGISTICA LTDA",
        "cnpj_transp": "12227730000109",
        "status": "COMPROVADO",
        "valor": "156.08",
        "volumes": "4",
        "dt_emis": "31/03/2020 13:00:05",
        "dt_entrega": "01/04/2020 15:00:05"
    }
]
