@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('modalidades') }}">Voltar</a>
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

                        <form action="{{url('modalidades/update') }}/{{ $modalidades->id}}')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nome:</label>
                                <input type="text" name="name" class="form-control  @error('name') id-invalid @enderror" value="{{$modalidades->name}}">
                                @error('name')
                                    <div class="alert alert-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Turno: </label>
                                <input type="text" name="turno" class="form-control"  value="{{$modalidades->email}}">

                            </div>


                            <button type="submit" class="btn btn-primary">Atualizar Dados</button>
                        </form>


                    @else

                        <form action="{{url('modalidades/add')}}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="exampleInputEmail1">Nome:</label>
                                <input type="text" name="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Turno: </label>
                                <input type="text" name="turno" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                            </div>

                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </form>

                      @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
