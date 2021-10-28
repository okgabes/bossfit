@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('/modalidades') }}">Voltar</a>
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
                            <th scope="col">Código</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Turno</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">{{ $modalidades->id}}</th>
                            <td>{{ $modalidades->name}}</td>
                            <td>{{ $modalidades->turno}}</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
