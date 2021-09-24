@extends('layouts.app')

@section('content')
     <div class="container p-2">
        <div class="row justify-content-center p-2">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Painel de emails cadaastrados</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}

                            </div>
                        @endif
                        

                        <h4>Olá, {{ auth()->user()->name }}.</h4>
                    </div>
                    
                   
                    @if(auth()->user()->adm == 1)
                    <table class="table table-striped text-center ">
                        <thead>
                            <tr>
                                <th scope="col">id </th>
                                <th scope="col">Nome</th>
                                <th scope="col">E-mail</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                </tr>

                            @endforeach
                        </tbody>
                    </table>  
                    @endif
                </div>
            </div>
        </div>
    </div> 
   
@endsection
