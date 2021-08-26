@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 60px;">
        <h4 class="card-header" style="text-align: center; background-color:lightgrey">Create Article</h4>
        <div class="py-2">
            {!! Form::open(['action' => 'App\Http\Controllers\ArticlesController@store','method' => 'POST','enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                   <h4> {!! Form::label('title','Title') !!}</h4>
                   {!! Form::text('title', '', ['class' => 'form-control']) !!}
                   @error('title')
                        <div class="alert text-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            {{ $message }}
                        </div>
                   @enderror
                </div>
                <div class="form-group">
                    <h4> {!! Form::label('body','Content') !!}</h4>
                    {!! Form::textarea('body', '', ['class' => 'form-control']) !!}
                    @error('body')
                        <div class="alert text-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            {{ $message }}
                        </div>
                    @enderror
                 </div>
                 <div class="form-group">
                    {!! Form::file('image') !!}
                 </div>
                 <div class="form-group">
                   {!! Form::submit('Submit', ['class'=>'btn btn-secondary']) !!}
                 </div>
            {!! Form::close() !!}
            <hr>
            &copy; @php echo date('l, Y')@endphp


        </div>
    </div>

@endsection
