<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	
	<style type="text/css">
		body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"Calibri"; font-size:x-small }
		a.comment-indicator:hover + comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em;  } 
		a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em;  } 
		comment { display:none;  } 
	</style>
	
</head>

<body>
<table cellspacing="0" border="0">
	<colgroup width="26"></colgroup>
	<colgroup width="95"></colgroup>
	<colgroup width="110"></colgroup>
	<colgroup width="201"></colgroup>
	<colgroup width="95"></colgroup>
	<colgroup width="106"></colgroup>
	<colgroup width="138"></colgroup>
	<colgroup width="79"></colgroup>
	<tr>
		<td colspan=8  align="center"><font color="#000000">Laporan Data Pemesanan Barang Egopro Jogja</font></td>
		</tr>
	<tr>
		<td colspan=8  align="center"><font color="#000000">Tanggal {{$start}} s/d {{$end}}</font></td>
		</tr>
	<tr>
		<td height="20" align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="20" align="left" bgcolor="#FFFF00"><font color="#000000">No</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" bgcolor="#FFFF00"><font color="#000000">Tanggal Sewa</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" bgcolor="#FFFF00"><font color="#000000">Nama Penyewa</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" bgcolor="#FFFF00"><font color="#000000">Barang</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" bgcolor="#FFFF00"><font color="#000000">Biaya Sewa</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" bgcolor="#FFFF00"><font color="#000000">Jumlah Sewa</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" bgcolor="#FFFF00"><font color="#000000">Sub Biaya</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" bgcolor="#FFFF00"><font color="#000000">Denda</font></td>
	</tr>
	@php 
        $i=1;
        $subtotal = 0; 
    @endphp
    @foreach($data as $p)
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="right" sdval="1" sdnum="1033;"><font color="#000000">{{ $i++ }}</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000">{{ $p->tanggalSewa }}</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000">{{ $p->name }}</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000">{{ $p->namaProduct }}</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000">{{ rupiah($p->biayaSewa) }}</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000">{{ $p->quantity . ' Buah' }}</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000">{{ rupiah($p->subBiayaSewa) }}</font></td>
        @if($p->denda == '1')
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000">Yes</font></td>
        @else
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000">No</font></td>
        @endif
    </tr>
    @php $subtotal = $subtotal + $p->subBiayaSewa; @endphp
    @endforeach
	<tr>
		<td height="20" align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td  align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000">Total Pendapatan : {{rupiah($subtotal)}}</font></td>
		<td align="left"><font color="#000000"><br></font></td>
	</tr>
    <tr>
		<td  align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
	</tr>
    <tr>
		<td  align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000">Yogyakarta, {{date('d F Y')}}</font></td>
		<td align="right"><font color="#000000"><br></font></td>
	</tr>
    <tr>
		<td  align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
	</tr>
    <tr>
		<td  align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
	</tr>
    <tr>
		<td  align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000"><br></font></td>
		<td align="left"><font color="#000000">Egopro</font></td>
		<td align="right"><font color="#000000"><br></font></td>
	</tr>
</table>
<!-- ************************************************************************** -->
</body>

</html>
