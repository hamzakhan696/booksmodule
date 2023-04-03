@extends('mytemplate');
<div class="container">
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
        @if(session()->has('danger'))
            <div class="alert alert-danger">
                {{ session()->get('danger') }}
            </div>
        @endif

    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Cover Image</th>
            <th scope="col">ISBN</th>
            <th scope="col">Published Date</th>
            <th scope="col">Price</th>
            <th scope="col">Number of Pages</th>
{{--            <th scope="col">Auther id</th>--}}
            <th scope="col">Action</th>



            <th scope="col"><a class="btn btn-secondary" href="{{url('/books/add')}}">Add BOOKS</a></th>
            <th>            <a href="/home" class="btn btn-info">Go Back</a>
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $dat)
            <tr>
                <td>{{$dat['id']}}</td>
                <td>{{$dat['title']}}</td>
                <td>{{$dat['description']}}</td>
                <td>{{$dat['cover_image']}}</td>
                <td>{{$dat['isbn']}}</td>
                <td>{{$dat['published_date']}}</td>
                <td>{{$dat['price']}}</td>
                <td>{{$dat['pages']}}</td>
{{--                @auth--}}
{{--                <td>{{ Auth::user()->name }}</td>--}}
{{--                @endauth--}}

                                <td><a class="btn btn-danger"onclick="return confirm('are u sure to delete this ')" href="{{url('delete',$dat->id)}}">Delete</a></td>
                <td><a class="btn btn-primary" href="/books/update/{{$dat['id']}}">Update</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
