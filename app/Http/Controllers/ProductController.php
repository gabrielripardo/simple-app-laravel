<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProductRequest;
use App\Models\Product;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Session\Store as SessionStore;

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
        $this->middleware('auth'); //Todos os métodos estão bloqueados
        //$this->middleware('auth')->only(['create', 'store', 'update', 'edit', 'destroy']); //Todos esses métodos estão bloqueados.
        //$this->middleware('auth')->except(['index', 'show']); //Todos os métodos estão com bloqueio exceto index() e show().
        
    }

    public function index()
    {        
        $products =  Product::all();
        //$products = ['orange', 'apple', 'strawberry', 'papaia'];

        return view('admin.pages.products.index', ['products' => $products]);
        //return view('index', compact('name', 'namehtml')); //Compact foi descontinuado nas versões atuais do PHP
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
     * @param  App\Http\Requests\StoreUpdateProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateProductRequest $request)
    {
        $data = $request->only('name', 'description', 'price');

        Product::create($data);

        return redirect()->route('products.index');        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        if(!$product)
            return redirect()->back();  

        //dd($product);
        //return "Detalhes do produto com id: {$id}";        
        return view('admin.pages.products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        if(!$product)
            return redirect()->back();  

        return view('admin.pages.products.edit', compact('product'));
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
        $product = Product::find($id);
        if(!$product)
            return redirect()->back();  

        $product->update($request->all());

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::where('id', $id)->first();

        if(!$product)
            return redirect()->back();

        $product->delete();

        return redirect()->route('products.index');
    }
}
