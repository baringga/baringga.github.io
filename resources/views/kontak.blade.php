<!-- Menghubungkan dengan view template master -->
@extends('master')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Kontak')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
 
	<p>Ini Adalah Halaman Kontak</p>
	
	<table class="table table-hover">
		<tr>
			<td>Email</td>
			<td>:</td>
			<td>dewimaharani170104@gmail.com</td>
		</tr>
		<tr>
			<td>Hp</td>
			<td>:</td>
			<td>0877-4623-5820</td>
		</tr>
        @for ($i=1;$i<5;$i++)
        <tr>
			<td>NO</td>
			<td>:</td>
			<td>{{ $i }}</td>
		</tr>
        @endfor
	</table>
 
@endsection