<form method="post" action="/books/update">
    @csrf
    <input type="hidden" name="id" value="{{$book->id}}"/>
    <input type="text" name="titulo" value="{{$book->titulo}}"/>
    <a href="/books">Voltar</a>
    <button type="submit">Alterar</button>
</form>