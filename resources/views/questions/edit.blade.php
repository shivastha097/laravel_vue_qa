@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h3>Edit Question</h3>
                        <div class="ml-auto">
                            <a href="{{ route('question.index') }}" class="btn btn-outline-secondary">Back to all Question</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('question.update', $question->id) }} " method="post">
                        @method('PUT')
                        @include('questions._form', ['buttonText' => 'Update Question'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
