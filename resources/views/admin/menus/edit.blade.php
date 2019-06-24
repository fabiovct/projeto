@extends('layouts.app')

@section('content')
<div class="container">
<h1> edit menu</h1>
<hr>
<form action="{{route('menus.update',['id' => $menu->id])}}" method="post">

<!--<input type="hidden" name="_token" value="{{csrf_token()}}">-->
 {{csrf_field()}}   
<p class="form-group">
    <label>Item</label><br>
    <input type="text" name="name" value="{{$menu->name}}" class="form-control"><br>
    @if($errors->has('name'))
        {{$errors->first('name')}}
    @endif
</p>

<p class="form-group">
    <label>Preço</label><br>
    <input type="text" name="price" value="{{$menu->price}}" class="form-control"><br>
    @if($errors->has('price'))
        {{$errors->first('price')}}
    @endif
</p>

<p class="form-group">
    <label>Restaurante</label><br>
    <select name="restaurant_id" class="form-control">
    
        @foreach($restaurants as $r)
        <option value="{{$r->id}}"
        @if ($menu->restaurant_id == $r->id)   
        selected
        @endif
        >{{$r->name}}</option>
        @endforeach
    </select>
    
    @if($errors->has('restaurant_id'))
        {{$errors->first('restaurant_id')}}
    @endif
</p>

<input class="btn btn-primary" type="submit" value="atualizar">

</form>
</div>
@endsection
