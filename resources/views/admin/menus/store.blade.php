@extends('layouts.app')

@section('content')
<div class="container">
<h1> insert menu</h1>
<hr>
<form action="{{route('menus.store')}}" method="post">

<!--<input type="hidden" name="_token" value="{{csrf_token()}}">-->
 {{csrf_field()}}   
<p class="form-group">
    <label> Nome do menu</label><br>
    <input type="text" name="name" value="{{old('name')}}" class="form-control @if($errors->has('name')) is-invalid @endif"><br>
    @if($errors->has('name'))
    <span class="invalid-feedback">
        {{$errors->first('name')}}
</span>
    @endif
</p>

<p class="form-group">
    <label>Preço</label><br>
    <input type="text" name="price" value="{{old('price')}}" class="form-control"><br>
    @if($errors->has('price'))
        {{$errors->first('price')}}
    @endif
</p>

<input class="btn btn-primary" type="submit" value="Cadastrar">

</form>
</div>
@endsection
