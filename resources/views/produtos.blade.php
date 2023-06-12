@extends('layout.app', ["current" => "produtos"])

@section('body')

    <div class="card border">
        <div class="card-title">
            <h5 class="table table-ordered table-hover">Cadastro de produtos</h5>

                <table >
                    <thead>
                        <tr>
                            <tr>Código do Produto</tr>
                            <tr>Nome do Produto</tr>
                            <tr>Quantidade</tr>
                            <tr>Preço</tr>
                            <tr>Departamento</tr>
                            <tr>Ações</tr>
                        </tr>
                    </thead>
                    <tbody>
                 
                    </tbody>
                </table>
                
        </div>
        <div class="card-footer">
            <a class="btn btn-sm btn-primary" role="button">Novo Produto</a>
        </div>
    </div>

@endsection