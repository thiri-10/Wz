@extends('layouts.master')

@section('content')
    <h2>Create New Book</h2>
    <form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Book UNIQUE_ID</label>
            <input class="form-control" type="text" name="book_uniq_id" placeholder="book_001" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Book Name</label>
            <input class="form-control" type="text" name="book_name" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Choose Content Owner</label>
            <select name="co_id" id="">
                @foreach (App\Models\ContentOwner::all() as $owner)
                    <option value="{{$owner->id}}">{{$owner->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="" class="form-lable">Choose Publisher</label>
            <select name="publisher_id" id="">
                @foreach (App\Models\Publisher::all() as $publisher)
                    <option value="{{$publisher->id}}">{{$publisher->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Price</label>
            <input class="form-control" type="number" name="book_price" required>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Choose Cover Photo</label>
            <input type="file" class="form-control" name="cover_photo" required>
        </div>

        <button class="btn btn-primary">Create New Book</button>
    </form>
@endsection
