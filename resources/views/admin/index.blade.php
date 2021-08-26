@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
           <a href="/admin/dashboard" class=" btn btn-secondary">Administrator</a>
        </div>
        <div class="card-body">
            <h4 class="card-title">Title</h4>
            <p class="card-text">Text</p>
        </div>
        <div class="card-footer text-muted">
            Footer
        </div>
    </div>
@endsection
