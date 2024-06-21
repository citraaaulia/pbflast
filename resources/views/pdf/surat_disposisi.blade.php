<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuratKeluar</title>
</head>

<body>

    <table align="center" width="500">
        <tr>
            <td> <img src="{{ asset('images/unandjaya.jpeg') }}" alt="Logo" height="70"></td>

            <td>
                <font size="3"><strong>LEMBARAN DISPOSISI SURAT</strong><br> UNIVERSITAS ANDALAS</font><br>

            </td>
        </tr>
        <tr>
            <td colspan="2">
                <hr>
            </td>
        </tr>
    </table>
    <table align="center" width="500">
        <tr>
            <td style="border: 1px solid black;">Nomor Surat</td>
            <td style="border: 1px solid black;"> : {{ $suratDisposisi->nomor_surat }}</td>
        </tr>
        <tr>
            <td style="border: 1px solid black;">Perihal</td>
            <td style="border: 1px solid black;"> : {{ $suratDisposisi->perihal }}</td>
        </tr>
        <tr>
            <td style="border: 1px solid black;">Tanggal Surat</td>
            <td style="border: 1px solid black;"> : {{ $suratDisposisi->tanggal_surat }}</td>
        </tr>
        </tr>
    </table>
    <br>

    <table align="center" width="500">
        <tr>
            <td align="center" width="167" style="border: 1px solid black;">Disposisi</td>
            <td align="center" width="167" style="border: 1px solid black;">Dari</td>
            <td align="center" width="166" style="border: 1px solid black;">Tanggal Surat</td>
        </tr>
        <tr>
            <td style="border: 1px solid black;">{{ $suratDisposisi->keterangan }}</td>
            <td style="border: 1px solid black;"><strong>Misran, SE</strong><br>Ka. Subdit Umum dan Rumah Tangga - Direktorat Umum dan Pengelolaan Aset</td>
            <td style="border: 1px solid black;">: {{ $suratDisposisi->tanggal_surat }}</td>
        </tr>
    </table>


    <br>

</body>

</html>