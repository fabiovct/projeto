@extends('layouts.app')

@section('content')

<div class="container">
<h1 class="float-left">Restaurantes</h1>
<a href="{{route('restaurants.new')}}" class="float-right btn btn-success">Novo</a>
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
    @foreach($restaurants as $r)
    <tr>
        <td>{{$r->id}}</td>
        <td>{{$r->name}}</td>
        <td>{{$r->created_at}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('restaurants.edit', ['restaurant'=>$r->id])}}">EDITAR</a><a href=""></a>
            <a class="btn btn-danger" href="{{route('restaurants.delete', ['id'=>$r->id])}}">EXLUIR</a>
        </td>
    </tr>
    @endforeach

    </tbody>
</table>
</div>
@endsection

