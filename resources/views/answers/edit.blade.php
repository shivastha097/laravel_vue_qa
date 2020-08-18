@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Editing answer for question: <strong>{{ $question->title }}</strong></h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('questions.answers.update', [$question->id, $answer->id]) }}" method="post">
                            @csrf 
                            @method('PATCH')
                            <div class="form-group">
                                <textarea class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" name="body" cols="30" rows="10">
                                    {{ old('body', $answer->body) }}
                                </textarea>
                                @if ($errors->has('body'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-outline-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection