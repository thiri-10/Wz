@extends('layouts.master')

@section('content')
<h2>Edit Book</h2>
<form action="{{ route('book.update',$book->id) }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Book UNIQUE_ID</label>
        <input class="form-control" type="text" name="book_uniq_id" placeholder="book_001" 
        value="{{old('book_uniq_id',$book->book_uniq_id)}}" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Book Name</label>
        <input class="form-control" type="text" name="book_name" 
        value="{{old('book_name',$book->book_name)}}" required>
    </div>
    <div class="mb-3">
        <select name="co_id" id="">
            @foreach (App\Models\ContentOwner::all() as $owner)
                <option value="{{$owner->id}}" {{$book->co_id== $owner->id ? 'selected' : ''}}>{{$owner->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <select name="publisher_id" id="">
            @foreach (App\Models\Publisher::all() as $publisher)
                <option value="{{$publisher->id}}" {{$book->publisher_id == $publisher->id ? 'selected' : ''}}>
                    {{$publisher->name}}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Price</label>
        <input class="form-control" type="number" name="book_price" value="{{old('book_price',$book->price)}}" required>
    </div>

    <button class="btn btn-primary">Edit Info</button>
</form>
@endsection