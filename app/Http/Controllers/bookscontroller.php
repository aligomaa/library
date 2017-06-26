<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Book;
use DB;

class bookscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

          $books =DB::table('books')
       ->join('sections', 'sections.id', '=', 'books.section_id')
        ->join('authors', 'authors.id', '=', 'books.author_id')
         ->select('books.id as bid','books.name','books.price','books.image','sections.sname','authors.aname')
        ->get();
            return View('books.books')
           ->with('books', $books); 
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
          $validator = Validator::make($request->all(), [
            'name' => 'required|unique:books',
            'price' => 'required',
         'image' => 'image|mimes:jpg,png' ,
        ]);

  if ($validator->fails()) {
            return redirect('books.book-new')
                        ->withErrors($validator);               
        }
        else{

          //    $section=$request->input('section');
           //    $author=$request->input('author');
     
     
             $book=new Book(); 
           $book->formstore($request);
           return redirect('books');
       }
   }
        

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book=Book::find($id);


$names =DB::table('books')
       ->join('sections', 'sections.id', '=', 'books.section_id')
        ->join('authors', 'authors.id', '=', 'books.author_id')
         ->select('books.id as bid','books.name','books.price','books.image','sections.sname','authors.aname')    
         ->where('books.id',$id)
        ->get();



        return View('books.book-edit')
           ->with('book', $book)
           ->with('names', $names);
           
           
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
                $book = Book::find($id);
            $book->name  = $request->Input('name');
            $book->author_id =$request->Input('author');
            $book->price = $request->Input('price');
            $book->section_id = $request->Input('section');
            $book->save();
            // redirect
            return redirect('books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $book = Book::find($id);

    $book->delete();
    return redirect('books');

    }
}
