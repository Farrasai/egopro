<table>
    <thead>
    <tr>
        <th colspan="8"> Laporan Data Pemesanan Barang Egopro Jogja</th> 
    </tr>
    <tr>
        <th>No</th>
        <th>Tanggal Sewa</th>
        <th>Nama Penyewa</th>
        <th>Barang</th>
        <th>Biaya Sewa</th>
        <th>Jumlah Sewa</th>
        <th>Sub Biaya</th>
        <th>Denda</th>
    </tr>
    </thead>
    <tbody>
    @php $i=1; @endphp
    @foreach($data as $p)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $p->tanggalSewa }}</td>
            <td>{{ $p->name }}</td>
            <td>{{ $p->namaProduct }}</td>
            <td>{{ rupiah($p->biayaSewa) }}</td>
            <td>{{ $p->quantity . ' Buah' }}</td>
            <td>{{ rupiah($p->subBiayaSewa) }}</td>
        @if($p->denda == '1')         
            <td>Yes</td>
        @else
            <td>No</td>        
        @endif
        </tr>
    @endforeach
    </tbody>
</table>
