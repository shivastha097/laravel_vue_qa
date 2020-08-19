@if ($answersCount > 0)
<div class="row justify-content-center mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2>{{ $answersCount . " " . str_plural('Answer', $question->answers_count) }} </h2>
            </div>
            @include('layouts._messages')
            <div class="card-body">
                @foreach ($answers as $answer)
                    @include('answers._answer')
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif
