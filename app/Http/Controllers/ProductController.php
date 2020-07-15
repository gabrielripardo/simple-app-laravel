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
        //$this->middleware('auth')->only(['create', 'store', 'update', 'edit', 'destroy']); //Todos esses métodos estão bloqueados.
        //$this->middleware('auth')->except(['index', 'show']); //Todos os métodos estão com bloqueio exceto index() e show().
        
    }

    public function index()
    {
        $testEmpty = "123";
        $num = 7;
        $teste3 = [1, 2, 3, 4, 5];
        $name = "This is test"; //Utilizado para a tag {{name}}
        $namehtml = "<h1>This is test</h1>"; //Utilizado para a tag {!! name !!}. Utilizado somente em caso em que o conteúdo é bem definido, pois pode gerar vulnerabilidades para ataques xss.

        //return view('index', ['name' => $name]);
        //return view('index', compact('name', 'namehtml')); //compact é uma função que em essência é um array que contém as variáveis. Nesse caso foi passado somente o nome da variável.
        return view('admin.pages.products.index', compact('name', 'namehtml', 'num', 'testEmpty', 'teste3'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // echo "Formulário do cadastro do produto.";
        return view('admin/pages/products/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        echo "Armazena novo produto";        
        dd('Cadastrando...');
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
        return view('admin.pages.products.edit', compact('id'));
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
        dd("Editando o produto com id: {$id}");
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
