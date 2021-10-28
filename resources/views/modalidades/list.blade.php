@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{url ('usuarios/') }}">Area do Aluno </a>
                </div>
                <div class="card-header">
                    <a href="{{url ('professores/') }}">Area do professor</a>
                </div>
                <div class="card-header">
                    <a href="{{url ('/modalidades/new') }}">Nova Modalidade</a>
                </div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Modalidades</h1>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Código</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Ver</th>
                                    <th scope="col">Editar</th>
                                    <th scope="col">Deletar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($modalidades as $modalidade)
                                    <tr>
                                        <th scope="row">{{$modalidade->id}}</th>
                                        <td>{{$modalidade->name}}</td>
                                        <td>{{$modalidade->turno}}</td>
                                        <td>
                                            <a href="modalidades/{{$modalidade->id}}" class="btn btn-success">Ver</a>
                                        </td>
                                        <td>
                                            <a href="modalidades/{{$modalidade->id}}/edit" class="btn btn-dark">Editar</a>
                                        </td>

                                        <td>
                                            <form action="modalidades/delete/{{$modalidade->id}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger">Deletar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
