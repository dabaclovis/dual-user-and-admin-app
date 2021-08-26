@extends('layouts.app')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            {{ $message }}
        </div>
    @endif
    <a href="/article/articles/create" class=" btn btn-secondary"> <i class="fa fa-plus fa-md" aria-hidden="true"></i> Add</a>
@endsection
