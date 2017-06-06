<?php

Route::group(['prefix' => 'busca-via-cep', 'namespace' => 'BrunoCouty\BuscaViaCep\Controllers'], function () {
    Route::post('', ['uses' => 'CepController@index']);
});