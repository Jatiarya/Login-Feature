@include('layouts.index')
<link rel="stylesheet" href="css/dashboard.css">
<div class="container">
    @if (session('success'))
        <div class="alert alert-info" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if (session('delete'))
        <div class="alert alert-danger" role="alert">
            {{ session('delete') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $items)
                <tr>
                    <th scope="row">{{ $items->id }}</th>
                    <td>{{ $items->nama }}</td>
                    <td>{{ $items->alamat }}</td>
                    <td>{{ $items->tgllhr }}</td>
                    <td class="btn-action">
                        <a class="btn btn-info" href="/edit/{{ $items->id }}">Edit</a>
                        <a class="btn btn-info" href="/delete/{{ $items->id }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
