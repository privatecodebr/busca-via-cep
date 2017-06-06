# Sobre o Busca Via Cep PHP

Este pacote o ajudará a encontrar dados de um endereço com base em um cep informado.

**Nota 1:** Este pacote utiliza o *webservice* [ViaCep](https://viacep.com.br/) e funciona somente com códigos postais brasileiros.

**Nota 2:** Este pacote pode ser usado com **qualquer framework ou aplicação PHP**. Neste documento, ensino a instalação em ***Laravel***.

## Requisitos:

- Laravel >= 5.1;
- guzzlehttp/guzzle;

## Utilização

Primeiro, faça o download da biblioteca através do composer:

```
composer require brunocouty/busca-via-cep
```

Agora, adicione o *Service Provider* no *array* de *providers*, no arquivo "*config/app.php*":

```php
BrunoCouty\BuscaViaCep\BuscaViaCepServiceProvider::class,
```

Para encontrar os dados de um Cep, basta instanciar a classe **Cep** e chamar o método **buscar**, passando como parâmetro uma *string* contendo o cep.

```php
$cep = new \BrunoCouty\BuscaViaCep\Services\Cep();
$response = $cep->busca('04538133');
```

Resposta (*status code 200*):

```php
[  
   {  
      "cep":"04538-133",
      "logradouro":"Avenida Brigadeiro Faria Lima",
      "complemento":"de 3253 ao fim - lado ímpar",
      "bairro":"Itaim Bibi",
      "localidade":"São Paulo",
      "uf":"SP",
      "unidade":"",
      "ibge":"3550308",
      "gia":"1004"
   }
]
```

Caso haja algum problema, você receberá um ***status code 422*** com o seguinte conteúdo:

```php
{  
   "message":"Client error: `GET https:\/\/viacep.com.br\/ws\/04538133a\/json\/unicode\/` resulted in a `400 Bad Request` response:\n<h2>Bad Request (400)<\/h2>\n",
   "code":400
}
```

## Gostou deste conteúdo? Me pague um café!

Yeah! Você gostou deste pacote? Me pague um café e me ajude a manter este pacote atualizado!

Quando você me ajuda, você tem acesso a **posts exclusivos** com muitas coisas úteis sobre PHP, Laravel, AngularJS, VueJS, Ionic, e muito mais! Você aprenderá a criar seus próprios pacotes PHP (independentes de framework), resolver problemas em seu código fonte... Um excelente conteúdo, sempre atualizado!

Você pode me ajudar com R$ 1 / mês e já terá acesso a meu conteúdo privado! 
E mais, precisa de ajuda com seu projeto? Eu posso ajudar você! Acesse [https://apoia.se/brunocouty](https://www.apoia.se/brunocouty), posso te ajudar via e-mail ou skype!

[https://apoia.se/brunocouty](https://www.apoia.se/brunocouty)