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
                    <div class="card-header fw-bold">List of all Books!</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">category</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($books as $book)
                                <tr>
                                    <td>
                                        @if($book->image)
                                        <img src="{{ Storage::url($book->image) }}" alt="Image of Book" width="80">
                                        @else
                                        <img src="/img/test.png" width="80" alt="no images">
                                        @endif
                                    </td>
                                    <td>{{ $book->name }}</td>
                                    <td>{{ $book->description }}</td>
                                    <td>{{ $book->category }}</td>
                                    <td>
                                        <a href="{{ route('book.edit', [$book->id]) }}">
                                            <button class="btn btn-info"><i class="fas fa-edit"></i></button>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{ route('book.destroy', $book->id) }}" method="post">@csrf
                                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                    
                                @endforeach
                               
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        {{ $books->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection