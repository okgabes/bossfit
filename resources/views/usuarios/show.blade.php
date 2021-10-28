@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('usuarios') }}">Voltar</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <table class="table table-hover table-dark">
                        <thead>
                          <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Modalidade</th>
                            <th scope="col">Professor</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Bairro</th>
                            <th scope="col">Cadastrante</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">{{ $usuario->name}}</th>
                            <td>{{ $usuario->cpf}}</td>
                            <td>{{ $usuario->modalidade}}</td>
                            <td>{{ $usuario->professor}}</td>
                            <td>{{ $usuario->rua}}, {{ $usuario->numero}}</td>
                            <td>{{ $usuario->bairro}}</td>
                            <td>{{ $usuario->cadastrante}}</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
