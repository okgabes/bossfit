@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Lista Crud') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Cadastramento BOSSFIT Academy</h1>
                    <a href="{{url ('usuarios') }}">Lista dos usuarios</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
