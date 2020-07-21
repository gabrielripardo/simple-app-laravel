@extends('admin/layout/app')

@section('title', 'Detalhes do produto')
    
@section('content')
    <h1>{{$product->name}}</h1>
    <ul>
        <li><strong>Nome: </strong>{{$product->name}}</li>
        <li><strong>Price: </strong>{{$product->price}}</li>
        <li><strong>Description: </strong>{{$product->description}}</li>
    </ul>

    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deletarModal">
            Deletar
        </button>          

        <div class="modal fade" id="deletarModal" tabindex="-1" role="dialog" aria-labelledby="deletarModalLaber" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Deletar Produto</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Deseja deletar o produto?</p>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Sim</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                </div>
              </div>
            </div>
        </div>
    </form>    
@endsection