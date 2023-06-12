@extends('layout.app' ,["current" => "index"])

@section('body')
    <div class="jumbotron bg-light border border-secundary">
        <div class="row">
            <div class="col-sm-6">
                <div class="card ">
                    <div class="card border border-primary border-dark">
                        <div class="card-body">
                            <h5 class="card title">Cadastro de Produtos</h5>
                            <p class="card-text">Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com mais de 2000 anos, suas raízes podem ser encontradas em uma obra de literatura latina clássica datada de 45 AC. Richard McClintock, um professor de latim do Hampden-Sydney College na Virginia, pesquisou uma das mais obscuras palavras em latim, consectetur, oriunda de uma passagem de Lorem Ipsum, e, procurando por entre citações da palavra na literatura clássica, descobriu a sua indubitável origem. Lorem Ipsum vem das seções 1.10.32 e 1.10.33 do "de Finibus Bonorum et Malorum" (Os Extremos do Bem e do Mal), de Cícero, escrito em 45 AC. Este livro é um tratado de teoria da ética muito popular na época da Renascença. A primeira linha de Lorem Ipsum, "Lorem Ipsum dolor sit amet..." vem de uma linha na seção 1.10.32</p>
                            <a href="/produtos" class="btn btn-primary btn-dark">Cadastre seus produtos aqui</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card ">
                    <div class="card border border-primary border-dark">
                        <div class="card-body">
                            <h5 class="card title">Cadastro de Departamentos</h5>
                            <p class="card-text">Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com mais de 2000 anos, suas raízes podem ser encontradas em uma obra de literatura latina clássica datada de 45 AC. Richard McClintock, um professor de latim do Hampden-Sydney College na Virginia, pesquisou uma das mais obscuras palavras em latim, consectetur, oriunda de uma passagem de Lorem Ipsum, e, procurando por entre citações da palavra na literatura clássica, descobriu a sua indubitável origem. Lorem Ipsum vem das seções 1.10.32 e 1.10.33 do "de Finibus Bonorum et Malorum" (Os Extremos do Bem e do Mal), de Cícero, escrito em 45 AC. Este livro é um tratado de teoria da ética muito popular na época da Renascença. A primeira linha de Lorem Ipsum, "Lorem Ipsum dolor sit amet..." vem de uma linha na seção 1.10.32</p>
                            <a href="/produtos" class="btn btn-primary btn-dark">Cadastre os departamentos aqui</a>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
@endsection