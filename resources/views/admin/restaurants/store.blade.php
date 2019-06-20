@extends('layouts.app')

@section('content')
<div class="container">
<h1> insert restaurant</h1>
<hr>
<form action="{{route('restaurants.store')}}" method="post">

<!--<input type="hidden" name="_token" value="{{csrf_token()}}">-->
 {{csrf_field()}}   
<p class="form-group">
    <label> Nome do restaurante</label><br>
    <input type="text" name="name" value="{{old('name')}}" class="form-control @if($errors->has('name')) is-invalid @endif"><br>
    @if($errors->has('name'))
    <span class="invalid-feedback">
        {{$errors->first('name')}}
</span>
    @endif
</p>

<p class="form-group">
    <label>Endereço</label><br>
    <input type="text" name="address" value="{{old('address')}}" class="form-control"><br>
    @if($errors->has('address'))
        {{$errors->first('address')}}
    @endif
</p>

<p class="form-group">
    <label>Fale sobre o restaurante</label><br>
    <textarea type="text" name="description" id="" cols="30" rows="10" class="form-control">{{old('description')}}</textarea><br>
    @if($errors->has('description'))
        {{$errors->first('description')}}
    @endif    
</p>

<input class="btn btn-primary" type="submit" value="Cadastrar">

</form>
</div>
@endsection
