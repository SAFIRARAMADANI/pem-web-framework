<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Data Produk</h1>
	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Produk</th>
			</tr>
		</thead>
<tbody>
		@foreach ($produk as $i => $v)
			<tr>
				<td>{{$i+1}}</td>
				<td>{{$v}}</td>
			</tr>
		@endforeach
</tbody>
</table>
</body>
</html>