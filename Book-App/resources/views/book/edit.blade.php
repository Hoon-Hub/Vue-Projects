@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (Session::has('message'))
                <div class="alert alert-success">
                    {{ Session::get('message') }}
                </div>
            @endif
            <div class="card  mt-5">
                <div class="card-header fw-bold">Update a Book!</div>
                <div class="card-body">
                    <form action="{{ route('book.update', $book->id) }}" method="post" enctype="multipart/form-data">@csrf
                        <label for="">Name of Book</label>
                        <input type="text" name="name" class="form-control" value="{{ $book->name }}"><br>
                        @if($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span><br>
                        @endif
                        <label for="">Description of Book</label>
                        <textarea name="description" class="form-control" cols="30" rows="10">{{ $book->description }}</textarea><br>
                        @if($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span><br>
                        @endif
                        <label for="">Category</label>
                        <select name="category" id="" class="form-control">
                            <option value="">select</option>
                            <option value="frictional"@if($book->category=='frictional') selected @endif> Frictional Book </option>
                            <option value="biography" @if($book->category=='biography') selected @endif>Biography Book</option>
                            <option value="comedy" @if($book->category=='comedy') selected @endif>Comedy Book</option>
                            <option value="education" @if($book->category=='education') selected @endif>Education</option>
                        </select>
                        @if($errors->has('category'))
                            <span class="text-danger">{{ $errors->first('category') }}</span><br>
                        @endif
                        <label for="">Image of Book</label>
                        <input type="file" name="image" class="form-control">
                        @if($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span><br>
                        @endif
                        <br>
                        <input type="submit" value="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection