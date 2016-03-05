<html>
    <body>
        <h2>
            Create a new Note
        </h2>
        <p>
            <a href="{{ route('notes.index') }}">Back</a>
        </p>
        {!! Form::open(['method' => 'post', 'route' => 'notes.store']) !!}
        {!! Form::text('text') !!}
        {!! Form::submit() !!}
        {!! Form::close() !!}
    </body>
</html>