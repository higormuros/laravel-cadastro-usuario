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
                <tr>
                    <td><a class="btn btn-outline-primary" href="">1234</a></td>
                    <td class="align-middle">Higor Muros</td>
                </tr>
                <tr>
                    <td><a class="btn btn-outline-primary" href="">4321</a></td>
                    <td class="align-middle">Hugo Muros</td>
                </tr>
                <tr>
                    <td><a class="btn btn-outline-primary" href="">2345</a></td>
                    <td class="align-middle">Hiago Muros</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection