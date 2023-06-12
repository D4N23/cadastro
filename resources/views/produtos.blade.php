@extends('layout.app', ["current" => "produtos"])

@section('body')
    <div class="card border">
        <div class="card-title">
            <h5 class="table table-ordered table-hover"></h5>
    @if(count($prod) > 0)
                <table class="table table-ordered table-hover">
                    <thead>
                        <tr>
                            <tr>Código do Produto</tr>
                            <tr>Nome do Produto</tr>
                            <tr>Ações</tr>
                        </tr>
                    </thead>
                    <tbody>
            @foreach($prod as $pro)
                        <tr>
                            <td>{{$pro->id}}</td>
                            <td>{{$pro->nome}}</td>
                            <td>
                                <a href="/produtos/editar/{{$pro->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="/produtos/apagar/{{$pro->id}}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>
            @endforeach            
                    </tbody>
                </table>
    @endif            
        </div>
        <div class="card-footer">
            <a href="/produtos/novo" class="btn btn-sm btn-primary" role="button">Novo Produto</a>
        </div>
    </div>
@endsection