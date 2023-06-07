@extends('layouts.main')

@section('content')
    <div class="container-fluid">
    <a href="{{ route('users.create') }}"><button id="addNewUser" class="btn btn-success mb-2"><i class="fas fa-plus"></i>&nbsp; Adicionar</button></a>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        
                        <div class="table-responsive">
                            @if($users->count() > 0)
                                <table class="table">
                                    <thead class="text-white">
                                        <tr>
                                            <th>Nome</th>
                                            <th>Email</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    <button type="button" class="btn waves-effect waves-light btn-info"><i class="mdi mdi-pen"></i></button>
                                                    <button type="button" class="btn waves-effect waves-light btn-danger"><i class="mdi mdi-delete"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p>Não há resultados para exibir.</p>
                            @endif
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection