<!DOCTYPE html>
<html>
<head>
	<title>laravel saya</title>
</head>
<body>
	<h1>Data Produk</h1>
	<table border="1">
		<thead>
			<tr>
				<th>id</th>
				<th>Nama</th>
				<th>Kategori</th>
				<th>qty</th>
				<th>Harga Beli</th>
				<th>Harga Jual</th>
			</tr>
		</thead>
<tbody>
	<tr>
		@foreach ($produk as $i => $p)
			<tr>
				<td>{{$i+1}}</td>
				<td>{{ $p->nama }}</td>
				<td>{{ $p->kategori }}</td>
				<td>{{ $p->qty }}</td>
				<td>{{ $p->harga_beli }}</td>
				<td>{{ $p->harga_jual }}</td>
			</tr>
		@endforeach
	</tr>
</tbody>
</table>
</body>
</html>