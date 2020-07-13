<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

### Crud Products ###
Route::delete('produtos/{id}', 'ProductController@delete')->name('products.delete'); //Deleta produto
Route::put('produtos/{id}/update', 'ProductController@update')->name('products.update'); //Altera o produto
Route::get('produtos/{id}/edit', 'ProductController@edit')->name('products.edit'); //Formulário para editar produto
Route::get('produtos/{id}', 'ProductController@show')->name('products.show'); //Detalhes do produto
Route::get('produtos', 'ProductController@index')->name('products.index'); //Lista os produtos
Route::get('produtos/create', 'ProductController@create')->name('products.create'); //Formulário para cadastrar o produto
Route::post('produtos', 'ProductController@store')->name('products.store'); //Armazenar o produto

### Acesso restrito ###
Route::middleware([])->group(function(){ //Tudo que tiver middleware só será executado se o usuário tiver logado. //caso houver auth no array ele vai restringir o acesso.
    Route::prefix('admin')->group(function(){ //todas as rotas vai ficar com /admin/...
        Route::name('admin')->group(function(){ //todos os names ficam com admin
            //Route::get('usuarios', function(){
            //    return "Página de usuários";
            //})->name('admin-usuarios');
            Route::get('dashboard', 'admin\TesteController@dashboard')->name('dashboard');  //rota: admin/dashboard | @ chama a função testar | name: admin.dashboard 
            Route::get('financeiro', 'admin\TesteController@financeiro')->name('financeiro');
            Route::get('usuarios', 'admin\TesteController@usuarios')->name('usuarios');            
            Route::get('/', function(){ //Redirecionar página para admin/dashboard ao entrar em /admin
                return redirect()->route('admin.dashboard'); //Na função route é informado o name da rota.
            })->name('home');
        });        
    });       
});

Route::get('login', function(){
    return "Página de login";
})->name('login');

### Nome da rota ###
Route::get('redirect3', function(){
    return redirect()->route('alterar-produto');
});

Route::get('alterar-produto-cadastrado', function(){ //O alterar pode ser mudado sem precisar refatorar todo o projeto. Facilita a manutenção!
    return "Alteração de produto";
})->name('alterar-produto'); 

### Redirecionamento de Views ###
Route::redirect('redirect1', 'redirect2');

/*
Route::get('redirect1', function(){
    return "Page of redirect1";
    //return redirect('redirect2');
});
*/

Route::get('redirect2', function(){
    return "Page of redirect2";
});

### Rotas com ou sem parâmetros ###

Route::get('flexibleflag/{flag?}', function($flag = false){ //Parâmetros dinâmicos
    if($flag == false){
        return "No flag. List all products";
    }else{
        return "Route with flag. {$flag}";    
    }    
});

Route::get('flagbehind/{flag}/plates', function($flag){
    return "Flag behind routes. Id is {$flag} of plates category.";
});

Route::get('simpleflag/{flag}', function($flag){ //Flag required before prefix
    return "Just one Flag required after prefix. The flag is {$flag}";
});

### Tipos de requisições em rotas ###

Route::match(['get', 'post'], '/cookwithmatch', function () { //Aceita apenas os tipos específcados no array.
    return "This is cook with match  route.";
});

Route::any('/cook', function () { //Aceita todos os tipos. Get, Post, Put, Delete.
    return "This is cook route.";
});

Route::get('/bathroom', function () { //Rota de teste
    return view('bathroom');
});

### View raiz (index) ###

Route::get('/', function () {
    return view('welcome');
});
