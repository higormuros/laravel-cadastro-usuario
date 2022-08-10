@extends("sistema.templates.basico")
@section("titulo","Lista de Usuarios")
@section("conteudo")
<div class="container py-5">
    <div class="border p-5">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th style="width:10%">ID</th>
                    <th>Nome</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                <tr>
                    <td><a class="btn btn-outline-primary" href="{{ route('sistema.ver',$usuario->id) }}">Editar {{ $usuario->id }}</a></td>
                    <td class="align-middle">{{ $usuario-> nome }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection