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
			background-color: lightgrey;
		}
		th, td {
			padding: 10px;
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
				<th>Detail</th>
				<th>Delete</th>
			</tr>
			@forelse ($volleyballs as $volleyball)
			<tr>
				<td>{{ $volleyball->id }}</td>
				<td>{{ $volleyball->name }}</td>
				<td>{{ $volleyball->price }}</td>
				<td><a href="/volleyballs/{{ $volleyball->id }}">View Details</a></td>
				<td>
					<form method="POST" action="/volleyballs/{{$volleyball->id}}">
						@method('DELETE')
						@csrf


						<button>Remove</button>
					</form>

					
				</td>
			</tr>

			@empty
			<tr>
				<td colspan="5" style="text-align: center;">No volleyballs available.</td>
			</tr>

			@endforelse
		</table>
	</div>
	<div style="display: flex; justify-content: center; align-items: center; margin-top: 50px;">
		<a href="volleyballs/create" style="margin: 10px; background-color: lightgray; padding: 10px; text-decoration: none; color: black; border-radius: 10px">ADD</a>
	</div>
</body>
</html>