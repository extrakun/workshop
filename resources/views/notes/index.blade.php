<html>
<body>
<h2>
    Notes
</h2>

<ul>
    @foreach($notes as $n)
        <li>{{$n->text}}</li>
    @endforeach
</ul>
</body>
</html>