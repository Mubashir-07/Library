<?php

namespace App\Http\Controllers;

use App\Mail\BorrowBookMail;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request['search'] ?? "";

        $books = Book::when($request->input('search') != '', function ($query) use ($search) {
            $query->where('bname', $search);
            $query->orWhere('genre', $search);
        })->paginate(10);

        return view('Book.Showbook', compact('books', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Book.Addbook');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'bname' => 'required',
            'authname' => 'required',
            'copies' => 'required',
            'pubdate' => 'required',
            'genre' => 'required'
        ]);

        $input = ([
            'bname' => $request->bname,
            'authname' => $request->authname,
            'copies' => $request->copies,
            'pubdate' => $request->pubdate,
            'genre' => $request->genre,
            // 'image'=>$request->image,
        ]);

        // if(request()->hasFile('image'))
        // {
        //     $extension = request('image')->extension();
        //     $fileName = 'user_pic_'.time().'.'.$extension;
        //     request('image')->storeAs('images',$fileName);
        //     $input['image'] = $fileName;
        // }


        $books = Book::create($input);

        return redirect()->route('book.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('Book.Editbook', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {

        // $input=([
        //     'bname'=>$request->bname,
        //     'authname'=>$request->authname,
        //     'copies'=>$request->copies,
        //     'pubdate'=>$request->pubdate,
        //     'image'=>$request->image,
        // ]);

        // if(request()->hasFile('image'))
        // {
        //     $image = $request->file('image');
        //     $extension = $image->extension();
        //     $fileName = 'user_pic_'.time().'.'.$extension;
        //     $image->storeAs('images',$fileName);
        //     $input['image'] = $fileName;
        // }
        // dd($book);

        $books = $book->update([
            'bname' => $request->bname,
            'authname' => $request->authname,
            'copies' => $request->copies,
            'genre' => $request->genre,
            'pubdate' => $request->pubdate,
            // 'image'=>$request->image,
        ]);

        return redirect()->route('book.index');



        //    if(request()->hasFile('image'))
        // {
        //     $extension = request('image')->extension();
        //     $fileName = 'user_pic_'.time().'.'.$extension;
        //     request('image')->storeAs('images',$fileName);
        //     $input['image'] = $fileName;
        // }

        // $book->update([
        //     'bname' => $request->bname,
        //     'authname' => $request->authname,
        //     'copies' => $request->copies,
        //     'pubdate' => $request->pubdate,
        // ]);
        // return redirect()->route('book.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('book.index');
    }

    public function DeleteBook($book)
    {
        $book->forceDelete();
        return redirect()->route('book.index');
    }
}
