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
        <div>
            {!! Form::label('User') !!}
        {!! Form::select('user_id', $all_users) !!}
        </div>
        {!! Form::submit() !!}
        {!! Form::close() !!}
    </body>
</html>