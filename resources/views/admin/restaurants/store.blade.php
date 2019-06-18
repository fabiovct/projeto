<h1> insert restaurant</h1>
<hr>
<form action="{{route('restaurants.store')}}" method="post">

<!--<input type="hidden" name="_token" value="{{csrf_token()}}">-->
 {{csrf_field()}}   
<p>
    <label> Nome do restaurante</label><br>
    <input type="text" name="name">
</p>

<p>
    <label>Endereço</label><br>
    <input type="text" name="address">
</p>

<p>
    <label>Fale sobre o restaurante</label><br>
    <textarea type="text" name="description" id="" cols="30" rows="10"></textarea>    
</p>

<input type="submit" value="Cadastrar">

</form>
