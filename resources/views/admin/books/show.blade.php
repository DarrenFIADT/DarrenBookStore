@extends('layouts.app')
# @Date:   2019-11-12T14:56:43+00:00
# @Last modified time: 2019-11-12T14:56:54+00:00




@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="card">
        <div class="card-header">
          Book: {{ $book->title   }}
        </div>
       <div class="card-body">
          <table class="table table-hover">
            <tbody>
              <tr>
                <td>Title</td>
                  <td>{{ $book->title }}</td>
              </tr>
              <tr>
                <td>Author</td>
                  <td>{{ $book->author }}</td>
              </tr>
              <tr>
                <td>Publisher</td>
                  <td>{{ $book->publisher }}</td>
              </tr>
              <tr>
                <td>Year</td>
                  <td>{{ $book->year }}</td>
              </tr>
              <tr>
                <td>ISBN</td>
                  <td>{{$book->isbn }}</td>
              </tr>
              <tr>
                <td>Price</td>
                  <td>{{ $book->price }}</td>
              </tr>
            </tbody>

          </table>

          <a href="{{route ('admin.books.index') }}" class="btn btn-default">Back</a>
          <a href="{{route ('admin.books.edit', $book->id) }}" class="btn btn-warning">Edit</a>
          <form style="display:inline-block" method="POST" action="{{ route ('admin.books.destroy', $book->id)   }}">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token()  }}">
            <button type="submit" class="form-control btn btn-danger">Delete</a>
          </form>

       </div>
      </div>
     </div>
    </div>
   </div>
@endsection
