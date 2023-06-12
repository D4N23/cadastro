@extends('layout.app', ["current" => "categorias"])

@section('body')
    <div class="card border">
        <div class="card-title">
            <h5 class="table table-ordered table-hover"> </h5>
    @if(count($cats) > 0)
                <table class="table table-ordered table-hover">
                    <thead>
                        <tr>
                            <tr>Código</tr>
                            <tr>Nome da Categoria</tr>
                            <tr>Ações</tr>
                        </tr>
                    </thead>
                    <tbody>
            @foreach($cats as $cat)
                        <tr>
                            <td>{{$cat->id}}</td>
                            <td>{{$cat->nome}}</td>
                            <td>
                                <a href="/categorias/editar/{{$cat->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="/categorias/apagar/{{$cat->id}}" class="btn btn-sm btn-danger">Aoagar</a>
                            </td>
                        </tr>
            @endforeach            
                    </tbody>
                </table>
    @endif            
        </div>
        <div class="card-footer">
            <a href="/cattegorias/novo" class="btn btn-sm btn-primary" role="button">Nova categoria</a>
        </div>
    </div>
    
@endsection