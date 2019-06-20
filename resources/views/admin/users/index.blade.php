@extends('layouts.app')

@section('content')

<div class="container">
<h1 class="float-left">Users</h1>
<a href="{{route('users.new')}}" class="float-right btn btn-success">Novo</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>nome</th>
            <th>Criando em</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $u)
    <tr>
        <td>{{$u->id}}</td>
        <td>{{$u->name}}</td>
        <td>{{$u->created_at}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('users.edit', ['user'=>$u->id])}}">EDITAR</a><a href=""></a>
            <a class="btn btn-danger" href="{{route('users.delete', ['id'=>$u->id])}}">EXLUIR</a>
        </td>
    </tr>
    @endforeach

    </tbody>
</table>
</div>
@endsection

