@extends('admin/layout/app')

@section('title', 'Editar Produto '.$product->name)

@section('content')
    <h1>Editar produto {{ $product->name }}</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">        
        @method('PUT')
        @csrf <!-- Token para validar o cadastro -->
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <input class="form-control" type="text" name="name" placeholder="name" value="{{ $product->name }}">
                </div>
                <div class="form-group">            
                    <select class="form-control" name="category" id="category">                
                        <option value="">Selecione uma categoria</option>
                        @foreach ($categories as $category)                    
                            @if ($category->id == $product->category)
                                <option selected value="{{ $category->id }}">{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach                
                    </select>
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="description" placeholder="your description" value="{{ $product->description }}">        
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="price" placeholder="preço" value="{{ $product->price }}">        
                </div>
            </div>
            <div class="col-3 text-center">                
                <img src="{{ url("storage/products/{$product->image}") }}" alt="{{ $product->image }}" style="max-width: 134px; max-heidth: 50px;">        
                <div class="form-group">
                    <input class="form-control" type="file" name="image">        
                </div>
            </div>
        </div>
                
        <div class="form-group text-center">
            <input type="submit" value="Enviar">
        </div>        
    </form>
@endsection

