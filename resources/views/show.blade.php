<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Volleyball</title>
    <style>
        table, th, td {
			
			background-color: lightgray;
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
        }

        a {
            margin: 10px;
			background-color: lightgray;
			padding: 10px;
			text-decoration: none;
			color: black;
			border-radius: 10px;
            }
    </style>
</head>
<body>
	<div style="display: flex; justify-content: center; align-items: center; margin-top: 50px;">
		<table>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Price</th>
				<th>Picture</th>
				<th>Descritpion</th>
			</tr>

			<tr>
				<td>{{ $volleyball->id }}</td>
				<td>{{ $volleyball->name }}</td>
				<td>{{ $volleyball->price/100 }}</td>
				<td><img src="{{ $volleyball->picture }}" alt="photo" width="100" height="100"></td>
				<td>{{ $volleyball->description }}</td>
			</tr>
		</table>
	</div>

	<div style="display: flex; justify-content: center; align-items: center; margin-top: 50px;">
		<a href="/volleyballs/{{ $volleyball->id - 1 }}">Précédent</a>
		<a href="/volleyballs/{{ $volleyball->id + 1 }}">Suivant</a>
	</div>

	<div style="display: flex; justify-content: center; align-items: center;">
		<a href="/volleyballs/{{$volleyball->id}}/edit">EDIT</a>
	</div>
    
</body>
</html>