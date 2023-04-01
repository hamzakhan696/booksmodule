@extends('mytemplate')
<div class="container">
    <h1>UPDATE THE BOOK HERE</h1>


    <form action="/books/update" method="POST" class="col-md-6" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="text" name="id" value="{{$data['id']}}" hidden>
        </div>
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text"  value="{{$data['title']}}" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control"  id="description" name="description">{{$data['description']}}</textarea>
        </div>
        <div class="form-group">
            <label for="cover_image">Cover Image:</label>
            <input type="file" class="form-control-file"  value="{{$data['cover_image']}}" id="cover_image" name="cover_image">
        </div>
        <div class="form-group">
            <label for="isbn">ISBN:</label>
            <input type="text" class="form-control"  value="{{$data['isbn']}}"id="isbn" name="isbn">
        </div>
        <div class="form-group">
            <label for="published_date">Published Date:</label>
            <input type="date" class="form-control" value="{{$data['published_date']}}" id="published_date" name="published_date">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" class="form-control" value="{{$data['price']}}" id="price" name="price">
        </div>
        <div class="form-group">
            <label for="num_pages">Number of Pages:</label>
            <input type="number" class="form-control" value="{{$data['pages']}}" id="num_pages" name="num_pages">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
