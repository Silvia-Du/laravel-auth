@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-5">Tutti i tuoi post</h1>

    <table class="table">
        <thead class="table-light">
          <tr>
            <th scope="col">id</th>
            <th scope="col">Title</th>
            <th scope="col">Reading time</th>
            <th scope="col">Autore</th>
            <th scope="col">Categoria</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)

            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->reading_time }} min</td>
                <td>{{ $post->author }}</td>
                <td>{{ $post->category }}</td>
                <td>
                    <a type="button" class="btn btn-info" href="">View more</a>
                    <a type="button" class="btn btn-light" href="">edit</a>
                    <form class="d-inline" action="" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-dark">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>
      </table>
</div>
@endsection
