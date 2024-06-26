@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($albums as $album)
        <div class="col">
            <div class="shadow">
                <div class="card"style="background-color: #98ABEE" >
                    <img src="/storage/album_covers/{{$album->cover_image}}" height="250px" class="card-img-top" alt="Album Image">
                    <div class="card-body">
                        <h5 class="card-title">{{$album->name}}</h5>
                        <p class="card-text">{{$album->description}}</p>
                        <a href="{{route('albums.show' , $album->id)}}" class="btn btn-primary">View</a>
                        <form method="POST" action="{{ route('albums.destroy', $album->id) }}" class="mt-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete ❗❗</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>




    <div class="d-flex justify-content-between mt-4">
        <p><strong>Showing {{ $albums->firstItem() }} - {{ $albums->lastItem() }} of {{ $albums->total() }} results </strong></p>
        {{ $albums->links('pagination::bootstrap-4') }}
    </div>


</div>

@endsection
