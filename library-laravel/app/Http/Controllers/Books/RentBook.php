<?php

namespace App\Http\Controllers\Books;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\GlobalVariable;
use App\Models\Rent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RentBook extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.books.published.rented_books');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $students = User::where('user_type_id', 1)->get();
        $book = Book::findOrFail($id);
        $variable = GlobalVariable::findOrFail(2);

        return view('pages.books.published.rent_book', compact('students', 'book', 'variable'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
    $input = $request->all();
       $book = Book::findOrFail($id);
       $user = Auth::user();

       $book_rent = new Rent();
       $book_rent->book_id = $book->id;
       $book_rent->rent_user_id = $user->id;
       $book_rent->borrow_user_id = $request->input('borrow_user_id');;
       $book_rent->issue_date = $request->input('issue_date');;
       $book_rent->return_date = $request->input('return_date');;
       $book_rent->save();

       return to_route('rented-books')->with('rented-book', 'Uspješno ste iznajmili knjigu!');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
