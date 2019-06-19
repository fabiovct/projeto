<h1>Restaurantes</h1>
<a href="{{route('restaurants.new')}}">Novo</a>
<table>
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
            <a href="{{route('restaurants.edit', ['restaurant'=>$r->id])}}">EDITAR</a><a href=""></a>
            <a href="{{route('restaurants.delete', ['id'=>$r->id])}}">EXLUIR</a>
        </td>
    </tr>
    @endforeach

    </tbody>
</table>