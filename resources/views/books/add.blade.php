@extends('mytemplate')
<div class="container">
    <h1>You can add the book here</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<form action="/books/add" method="POST" class="col-md-6" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control" id="description" name="description"></textarea>
    </div>
    <div class="form-group">
        <label for="cover_image">Cover Image:</label>
        <input type="file" class="form-control-file" id="cover_image" name="cover_image">
    </div>
    <div class="form-group">
        <label for="isbn">ISBN:</label>
        <input type="text" class="form-control" id="isbn" name="isbn">
    </div>
    <div class="form-group">
        <label for="published_date">Published Date:</label>
        <input type="date" class="form-control" id="published_date" name="published_date">
    </div>
    <div class="form-group">
        <label for="price">Price:</label>
        <input type="text" class="form-control" id="price" name="price">
    </div>
    <div class="form-group">
        <label for="num_pages">Number of Pages:</label>
        <input type="number" class="form-control" id="num_pages" name="num_pages">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
