<?php

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/books', function(){
    return view('books.index', ['books' => Book::all()]);
});

Route::get('/books/create', function(){
    return view('books.create');
});

Route::post('/books/store', function(Request $request){
    $data = $request->all();
    
    $book = new Book;
    $book->titulo = $data['titulo'];
    $book->save();

    return redirect('/books');
});

Route::get('/books/{id}/destroy', function($id){
    $book = Book::find($id);
    $book->delete();

    return redirect('/books');
});


Route::get('/books/{id}/edit', function($id){
    $book = Book::find($id);
    return view('books.edit', ['book' => $book]);
});

Route::post('/books/update', function(Request $request){
    $data = $request->all();

    $book = Book::find($data['id']);
    $book->titulo = $data['titulo'];
    $book->save();

    return redirect('/books');
});