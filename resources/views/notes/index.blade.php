<html>
<body>
<h2>
    Notes
</h2>
<p>
<a href="{{ route('notes.create') }}">Create a new Note</a>
</p>

<ul>
    @foreach($notes as $n)
        <li>{{$n->text}}</li>
    @endforeach
</ul>
</body>
</html>