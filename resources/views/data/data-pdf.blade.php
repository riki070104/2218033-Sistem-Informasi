<title>Data Kategori</title>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    table th {
        padding: 10px;
    }

    table td {
        padding: 5px;
    }
</style>
<center>
    <h2>Data Gudang</h2>
</center>

{{-- Tabel Kategori --}}
<table border="1" class="table table-bordered">
    <thead class="table-secondary">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Gudang</th>
            <th scope="col">Alamat</th>
            <th scope="col">Kapasitas</th>
            <th scope="col">Kontak</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($gudangs as $gudang)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $gudang->nama_gudang }}</td>
                <td>{{ $gudang->alamat }}</td>
                <td>{{ $gudang->kapasitas }}</td>
                <td>{{ $gudang->kontak }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
