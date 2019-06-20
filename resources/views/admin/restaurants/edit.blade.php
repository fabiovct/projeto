@extends('layouts.app')

@section('content')
<div class="container">
<h1> edit restaurant</h1>
<hr>
<form action="{{route('restaurants.update',['id' => $restaurant->id])}}" method="post">

<!--<input type="hidden" name="_token" value="{{csrf_token()}}">-->
 {{csrf_field()}}   
<p class="form-group">
    <label> Nome do restaurante</label><br>
    <input type="text" name="name" value="{{$restaurant->name}}" class="form-control"><br>
    @if($errors->has('name'))
        {{$errors->first('name')}}
    @endif
</p>

<p class="form-group">
    <label>Endereço</label><br>
    <input type="text" name="address" value="{{$restaurant->address}}" class="form-control"><br>
    @if($errors->has('address'))
        {{$errors->first('address')}}
    @endif
</p>

<p class="form-group">
    <label>Fale sobre o restaurante</label><br>
    <textarea type="text" name="description" id="" cols="30" rows="10" class="form-control">{{$restaurant->description}}</textarea><br>
    @if($errors->has('description'))
        {{$errors->first('description')}}
    @endif    
</p>

<input class="btn btn-primary" type="submit" value="atualizar">

</form>
</div>
@endsection
