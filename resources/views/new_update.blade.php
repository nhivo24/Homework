<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1></h1>
<form method="post" action="edit/{{$id}}">
    @csrf
    <input type="hidden" name="id" value="{{$id}}">
    <p>
        <label for="title">Title</label><br>
        <input type="text" name="title" value="{{$book[0]['title']}}">
    </p>

    <p>
        <label for="author">Author</label><br>
        <input type="text" name="author" value="{{$book[0]['author']}}">
    </p>
    <p>
        <button type="submit">update</button>
    </p>
</form>
</body>
</html>