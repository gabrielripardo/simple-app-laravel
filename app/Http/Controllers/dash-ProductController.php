<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){ //Lista todos 
        $fruits = ['Apple', 'Orange', 'Strawberry', 'Cherry'];

        return $fruits;
    }

    public function show($id){ //Mostra os detalhes 
        return "Detalhes do produto com id: {$id}";        
    }

    public function create(){ //Formulário de cadastro 
        return "Formulário para cadastrar produto";        
    }

    public function edit($id){ //Formulário para editar
        return "Formulário para cadastrar o produto com id: {$id}";        
    }

    public function store(){ //Armazena 
        return "Armazena novo produto";        
    }

    public function update($id){ //Edita
        return "Edita o produto com id: {$id}";        
    }
 
    public function delete($id){ //Deleta
        return "Deleta o produto com id: {$id}";        
    }
}
