<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public readonly Book $book;

    public function __construct(){
       $this->book = new Book;
    }
    

    public function index()
    {
        
        $books = DB::table("books")->where('id_user' , Auth::id()) ->get();

        return view("biblioteca", ["books"=> $books]);
    }
 

    public function create()
    {
        return view('book_create');
    }


    public function store(Request $request)
    {
        $created = $this->book->create([
                'titulo'=> $request->input('titulo'),
                'sub_titulo'=> $request->input('sub_titulo'),
                'autor'=> $request->input('autor'),
                'edição'=> $request->input('edição'),
                'editora' => $request->input('editora'),
                'date_publish' => $request->input('date_publish'),
                'id_user'=> $request->input('id_user')
            ]
        );

        if($created){
            return redirect()->back()->with('message','Livro Criado');
        }
        else{
            return redirect()->back()->with('message','Error ao criar');
        }
    }


    public function show(Book $book)
    {
       return view('book_details',['book'=> $book]);
    }


    public function edit(Book $book)
    {
        return view("book_atualize",["book"=> $book]);
    }


    public function update(Request $request, string $id)
    {
        $update = $this->book->where('id' , $id)->update($request->except(['_token','_method']));

        if ($update) {

            return redirect()->back()->with('message','Atualizado com sucesso');
        }

        return redirect()->back()->with('message','Erro na atualzação');

        
    }


    public function destroy(string $id)
    {
        $this->book->where('id', $id)->delete();

        return redirect()->route('books.index')->with('message','Livro deletado');
    }
}
