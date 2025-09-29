<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Volleyball</title>
	<style>
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
		}
		th, td {
			padding: 10px;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Price</th>
			<th>Detail</th>
		</tr>
		@foreach ($volleyballs as $volleyball)
		<tr>
			<td>{{ $volleyball->id }}</td>
			<td>{{ $volleyball->name }}</td>
			<td>{{ $volleyball->price }}</td>
			<td><a href="/volleyballs/{{ $volleyball->id }}">View Details</a></td>
		</tr>
		@endforeach
	</table>
</body>
</html>