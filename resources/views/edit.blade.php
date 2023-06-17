@include('layouts.index');
<h1>Halaman edit</h1>
<div class="container">
    <form action="/update/{{ $data->id }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Masukkan Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="alamat" class="form-control" id="alamat" name="alamat" value="{{ $data->alamat }}">
        </div>
        <div class="mb-3">
            <label for="tgllhr" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tgllhr" name="tgllhr" value="{{ $data->date }}">
        </div>
        <button type="submit" class="btn btn-info col-2">Edit</button>
    </form>
</div>
