<!-- ######## This is a comment, visible only in the source editor  ######## -->
<table style="width: 100%; border-collapse: collapse;">
<tbody>
<tr style="height: 10px;">
<td style="width: 40%; height: 10px;">
<h1 style="color: #4485b8;"><span style="color: #000000;"><strong>EGOPRO JOGJA</strong></span></h1>
<p>Jalan Candra Kirana No 14 Sagan,<br />Terban, Yogyakarta</p>
</td>
<td style="width: 30%; height: 10px; text-align: center;vertical-align: top;">
<p><strong>NOTA SEWA</strong></p>
<p></p>
</td>
<td style="width: 30%; height: 10px; text-align: left;">
<p>No Transaksi&nbsp; : {{ $sewa->kodeSewa }}<br />Tanggal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{ date("Y-m-d") }}<br />Anggota&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />Jaminan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</p>
</td>
</tr>
</tbody>
</table>
<h4></h4>
<table style="width: 100%; border-collapse: collapse;" border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Kode Barang</th>
				<th>Nama Barang</th>
				<th>Jumlah Sewa</th>
				<th>Harga Sewa</th>
				<th>Status</th>
                <th>Tgl Kembali</th>
			</tr>
		</thead>
		<tbody>
			@php 
                $i=1;
                $subtotal = 0;
            @endphp
			@foreach($sewadet as $p)
			<tr>
				<td style="text-align: center;">{{ $i++ }}</td>
				<td style="text-align: center;">{{$p->kode_barang}}</td>
				<td style="text-align: center;">{{$p->namaProduct}}</td>
				<td style="text-align: center;">{{$p->quantity}}</td>
                <td style="text-align: center;">{{$p->biayaSewa}}</td>
				<td style="text-align: center;">LUNAS</td>
				<td style="text-align: center;">{{$p->tanggalPengembalian}}</td>
			</tr>
            @php $subtotal = $subtotal + $p->subBiayaSewa; @endphp
			@endforeach
		</tbody>
	</table>
<br>
<br>
<table style="width: 100%; border-collapse: collapse;" border="0">
<tbody>
<tr>
<td style="width: 40%;"></td>
<td style="width: 30%;"></td>
<td style="width: 30%;">Sub Total : {{rupiah($subtotal)}}<em><br /></em>Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{$sewa->totalBiayaSewa}}</td>
</tr>
<tr>
<td style="width: 33.3333%;"></td>
<td style="width: 33.3333%;"></td>
<td style="width: 33.3333%;">
<p></p>
<br>
<br>
<p>Yogyakarta, {{ date('d M Y') }}</p>
<br>
<br>
<p>( Admin Egopro )</p>
</td>
</tr>
</tbody>
</table>
