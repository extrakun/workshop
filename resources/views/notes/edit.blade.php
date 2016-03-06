<html>
<body>
<h2>Editing note</h2>
<p>
    {!! Form::open(['method' => 'post', 'route' => ['notes.store', $note->id]]) !!}
    {!! Form::text('text', $note->text) !!}
    {!! Form::submit() !!}
    {!! Form::close() !!}
</p>
</body>
</html>