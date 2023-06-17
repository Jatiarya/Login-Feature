@include('layouts.index');
<h1>Halaman delete</h1>
<form action="/daftar" method="POST">
    @csrf
    
        <label for="">Nama</label>
        <input type="text" id="nama" name="nama">
    
        <label for="">Alamat</label>
        <input type="text" id="alamat" name="alamat">
    
        <label for="">Tanggal Lahir</label>
        <input type="date" id="tgllhr" name="tgllhr">
    
        <button type="submit">Hapus Data</button>
    </form>