<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">

    <button class="navbar-toggler" type="button" data-toggle="collapse" 
    data-target="#navbar" aria-controls="navbar" 
    aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav mr-auto">
        <li  class="nav-item active"  >
          <a href="/" @if($current =="index") class="nav-link active" @else class="nav-link" @endif >Home</a>
        </li>

        <li class="nav-item active">
            <a href="/produtos"@if($current =="produtos") class="nav-link active" @else class="nav-link" @endif >Produtos</a>
        </li>

        <li class="nav-item active">
            <a href="/categorias" @if($current =="categorias") class="nav-link active" @else class="nav-link" @endif >Categorias</a>
        </li>
      </ul>
    </div>
  </nav>