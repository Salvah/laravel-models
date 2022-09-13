<form method="post" action="/books/store">
    @csrf
    <input type="text" name="titulo"/>
    <a href="/books">Voltar</a>
    <button type="submit">Cadastrar</button>
</form>