<a href="books/create">Novo livro</a>
<table border>
    <thead>
        <tr>
            <th>Título</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($books as $book)
        <tr>
            <td>{{$book->titulo}}</td>
            <td>
            <a href="/books/{{$book->id}}/edit">Alterar</a>
            <a href="/books/{{$book->id}}/destroy">Remover</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>