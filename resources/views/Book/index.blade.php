@extends('layouts.master')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Content Owner</th>
                    <th>Publisher</th>
                    <th>Price</th>
                    <th>Cover Photo</th>
                    <th>Updated At</th>
                    <th>Created At</th>
                    <th>Control</th>
                  

                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>

                        <td>{{$book->id}}</td>
                        <td>{{$book->book_name}}</td>
                        <td>{{$book->content_owner()->name}}</td>
                        <td>{{$book->publisher()->name}}</td>
                        <td>{{$book->price}}</td>
                        <td>
                            <img src="{{url('public/coverPhoto/'.$book->cover_photo)}}" 
                            style="height: 100px; width: 150px;" >

                        </td>
                        <td>{{ $book->updated_at->format("h:i a")}}</td>
                        <td>{{$book->created_at->format("h:i a")}}</td>
                        <td>
                            <a href="{{route('book.edit',$book->id)}}" class="btn btn-primary ">Edit</a>
                            <form action="{{route('book.destroy',$book->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Delete</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection