@extends('layouts.app')
# @Date:   2019-10-22T14:45:01+01:00
# @Last modified time: 2019-11-12T15:00:42+00:00




@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome</div>

                <div class="card-body">
                      Welcome to Darrens Bookstore!
                      <br/>
                      Learn more <a href="{{ route('about')}}">about</a> us
                      <br/>
                      <a href="{{route('admin.books.index')}}">Books</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
