@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('professores') }}">Voltar</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)

                                <li>{{$error}}</li>

                                @endforeach
                            </ul>
                        </div>

                    @endif

                    @if ( Request::is('*/edit'))

                        <form action="{{url('professores/update') }}/{{ $professores->id}}')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nome:</label>
                                <input type="text" name="name" class="form-control " value="{{$professores->name}}">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">E-mail: </label>
                                <input type="email" name="email" class="form-control"  value="{{$professores->email}}">

                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">CPF:</label>
                                <input type="text" name="cpf" class="form-control" value="{{$professores->cpf}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Turno:</label>
                                <input type="text" name="turno" class="form-control" value="{{$professores->turno}}">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Rua:</label>
                                <input type="text" name="rua" class="form-control" value="{{$professores->rua}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Bairro:</label>
                                <input type="text" name="bairro" class="form-control" value="{{$professores->bairro}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">CEP:</label>
                                <input type="text" name="cep" class="form-control" value="{{$professores->cep}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Numero:</label>
                                <input type="number" name="numero" class="form-control" value="{{$professores->numero}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Cidade:</label>
                                <input type="text" name="cidade" class="form-control" value="{{$professores->cidade}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Estado:</label>
                                <input type="text" name="estado" class="form-control" value="{{$professores->estado}}">
                            </div>

                            <input type="hidden" name="cadastrante" class="form-control" value="{{ Auth::user()->name }}">

                            <button type="submit" class="btn btn-primary">Atualizar Dados</button>
                        </form>


                    @else

                        <form action="{{url('professores/add')}}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="exampleInputEmail1">Nome:</label>
                                <input type="text" name="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">E-mail: </label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">CPF:</label>
                                <input type="text" name="cpf" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Turno:</label>
                                <input type="text" name="turno" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Rua:</label>
                                <input type="text" name="rua" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Bairro:</label>
                                <input type="text" name="bairro" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">CEP:</label>
                                <input type="text" name="cep" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Numero:</label>
                                <input type="text" name="numero" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Cidade:</label>
                                <input type="text" name="cidade" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Estado:</label>
                                <input type="text" name="estado" class="form-control">
                            </div>

                            <input type="hidden" name="cadastrante" class="form-control" value="{{ Auth::user()->name }}">

                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </form>

                      @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
