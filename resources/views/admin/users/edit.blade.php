@extends('layouts.app')

@section('content')
<div class="container">
<h1> edit user</h1>
<hr>
<form action="{{route('users.update',['id' => $user->id])}}" method="post">

<!--<input type="hidden" name="_token" value="{{csrf_token()}}">-->
 {{csrf_field()}}   
<p class="form-group">
    <label> Nome do usuario</label><br>
    <input type="text" name="name" value="{{$user->name}}" class="form-control @if($errors->has('name')) is-invalid @endif"><br>
    @if($errors->has('name'))
    <span class="invalid-feedback">
        {{$errors->first('name')}}
</span>
    @endif
</p>

<p class="form-group">
    <label>email</label><br>
    <input type="email" name="email" value="{{$user->email}}" class="form-control"><br>
    @if($errors->has('email'))
        {{$errors->first('email')}}
    @endif
</p>

<p class="form-group">
    <label>senha</label><br>
    <input type="password" name="password" class="form-control"><br>
    @if($errors->has('password'))
        {{$errors->first('password')}}
    @endif
</p>

<p class="form-group">
    <label>confirmar senha</label><br>
    <input type="password" name="password_confirmation" class="form-control"><br>
    @if($errors->has('password_confirmation'))
        {{$errors->first('password_confirmation')}}
    @endif
</p>


<input class="btn btn-primary" type="submit" value="Editar">

</form>
</div>
@endsection
