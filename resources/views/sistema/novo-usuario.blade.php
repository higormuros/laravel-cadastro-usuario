@extends("sistema.templates.basico")
@section("titulo","Novo Usuario")
@section("conteudo")
<div class="container py-5">
    <form method="post" action="{{ route('sistema.novo') }}" class="border p-5">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Usuario</label>
            <input type="text" name="nome" class="form-control" id="nome" aria-describedby="nomeHelp">
            <div id="nomeHelp" class="form-text">Por favor, digite o nome completo.</div>
        </div>
        <div class="form-check">
            <input type="checkbox" name="produto1" class="form-check-input" id="produtoCheck1">
            <label class="form-check-label" for="produtoCheck1">Produto 1</label>   
        </div>
        <div class="form-check">
            <input type="checkbox" name="produto2" class="form-check-input" id="produtoCheck2">
            <label class="form-check-label" for="produtoCheck2">Produto 2</label>
        </div>
        <div class="form-check">
            <input type="checkbox" name="produto3" class="form-check-input" id="produtoCheck3">
            <label class="form-check-label" for="produtoCheck3">Produto 3</label>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Salvar</button>
    </form>
</div>

@endsection