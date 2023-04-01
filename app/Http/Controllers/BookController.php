<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{

    public function addBook(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'cover_image' => 'required|image',
            'isbn' => 'required|unique:books,ISBN',
            'published_date' => 'required|date',
            'price' => 'required|numeric',
            'number_of_pages' => 'integer',
        ]);
      $data= new Book();
      $data->title=$request->input('title');
        $data->description=$request->input('description');
        $imageName = time() . '.' . $request->cover_image->extension();
        $data->cover_image=$request->cover_image->storeAs('public/images', $imageName);
        $data->isbn=$request->input('isbn');
        $data->published_date=$request->input('published_date');
        $data->price=$request->input('price');
        $data->pages=$request->input('num_pages');
        $user_id = Auth::id();
        $data->author_id=$user_id;
        $data->save();
        return redirect('/books')->withSuccess('Your form has been submitted successfully!');


    }

    public function view()
    {
        $data=Book::all();
        return view('books.view',['data'=>$data]);
    }

    public function delete($id)
    {
        $data=Book::find($id);
        $data->delete();
        return redirect('books');
    }

    public function update($id)
    {
        $data=Book::find($id);
        return view('books.update',['data'=>$data]);
    }

    public function edit(Request $request)
    {

        $data=Book::find($request->id);
        $data->title=$request->input('title');
        $data->description=$request->input('description');
        $imageName = time() . '.' . $request->cover_image->extension();
        $data->cover_image=$request->cover_image->storeAs('public/images', $imageName);
        $data->isbn=$request->input('isbn');
        $data->published_date=$request->input('published_date');
        $data->price=$request->input('price');
        $data->pages=$request->input('num_pages');
        $data->save();
        return redirect('/books')->withSuccess('Your book update has been submitted successfully!');
    }

}
