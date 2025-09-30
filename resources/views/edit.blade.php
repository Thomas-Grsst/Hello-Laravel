<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit du ballon {{$volleyball -> id}}</title>
    <style></style>
</head>
<body>
    <form action="/volleyballs/{{$volleyball->id}}" method="POST">
        
        @csrf
        @method('PATCH')

        <input type="text" name="name" value="{{$volleyball -> name}}">
        <input type="text" name="price" value="{{$volleyball -> price}}">
        <input type="text" name="picture" value="{{$volleyball -> picture}}">
        <textarea name="description">{{$volleyball -> description}}</textarea>
        <button type="submit">Submit</button>
    </form>
</body>