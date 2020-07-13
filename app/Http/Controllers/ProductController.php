<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $request;

    public function __construct(Request $request)
    {   
        $this->$request = $request;

        //Bloqueado = usuário precisa realizar o login para acessá-los.
        //$this->middleware('auth'); //Todos os métodos estão bloqueados
        $this->middleware('auth')->only(['create', 'store', 'update', 'edit', 'destroy']); //Todos esses métodos estão bloqueados.
        //$this->middleware('auth')->except(['index', 'show']); //Todos os métodos estão com bloqueio exceto index() e show().
        
    }

    public function index()
    {
        $fruits = ['Apple', 'Orange', 'Strawberry', 'Cherry'];

        return $fruits;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "Formulário para cadastrar produto";        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return "Armazena novo produto";        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "Detalhes do produto com id: {$id}";        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "Formulário para editar o produto com id: {$id}";           
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return "Edita o produto com id: {$id}";        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "Deleta o produto com id: {$id}";       
    }
}
