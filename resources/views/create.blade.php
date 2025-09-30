<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Volleyball</title>
    <style>
        form {
            max-width: 400px;
            margin: auto;
            
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        button {
            margin-top: 15px;
            padding: 10px 15px;
        }
    </style>
</head>
<body>



    <h1  style="display: flex; justify-content: center; align-items: center; margin-top: 50px;">Create a New Volley-ball</h1>

    <form action="/volleyballs" method="POST">

        @csrf

        <label for="name">Name:</label>
        <input @error ('name') style="border: 2px solid red;" @enderror
            type="text" id="name" name="name" value="{{old('name')}}" required><br><br>
        @error('name')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <label for="price">Price:</label>
        <input @error ('price') style="border: 2px solid red;" @enderror
            type="text" id="price" name="price" value="{{old('price')}}" required><br><br>
        @error('price')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <label for="picture">Pictures URL:</label>
        <input @error ('picture') style="border: 2px solid red;" @enderror
            type="text" id="picture" name="picture" value="{{old('picture')}}" required><br><br>
        @error('picture')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <label for="description">Description:</label>
        <textarea @error ('description') style="border: 2px solid red;" @enderror
            id="description" name="description" required>{{old('description')}}</textarea><br><br>
        @error('description')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <button type="submit" >Create Volleyball</button>
    </form>
</body>
</html>