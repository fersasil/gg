<?php

namespace App\Http\Controllers;

use App\Support\View;

class PessoasController {
  public function guilherme(View $view) {
    // banco... Model -> banco
    $gui = model();

    return $view('user2.teste', $gui);
  }
}


function model() {
  return [
    "name" => "Guilherme Sabino",
    "address" => "Rua dos endereços, número dos números",
    "cel" => "11111111"
  ];
}

function model2() {
  return [
    "name" => "João Sabino",
    "address" => "Rua dos avos, número dos avôs",
    "cel" => "22222222"
  ];
}