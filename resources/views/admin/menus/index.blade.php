@extends('layouts.app')

@section('content')

<div class="container">
<h1 class="float-left">menus</h1>
<a href="{{route('menus.new')}}" class="float-right btn btn-success">Novo</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>nome</th>
            <th>Restaurante</th>
            <th>Criando em</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($menus as $m)
    <tr>
        <td>{{$m->id}}</td>
        <td>{{$m->name}}</td>
        <td>
        <a href="{{route('restaurants.edit', ['restaurant'=>$m->restaurant->id])}}">
            {{$m->restaurant->name}}
        </a>    
        </td>
        <td>{{$m->created_at}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('menus.edit', ['menu'=>$m->id])}}">EDITAR</a><a href=""></a>
            <a class="btn btn-danger" href="{{route('menus.delete', ['id'=>$m->id])}}">EXLUIR</a>
        </td>
    </tr>
    @endforeach

    </tbody>
</table>
</div>
@endsection

