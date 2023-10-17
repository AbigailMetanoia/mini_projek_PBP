<section>
    {{-- <h5>Id: {{ $bookId }}</h5>
    <h5>Info: {{ $bookInfo }}</h5> --}}
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="font-weight-bolder" style="font-size: 24px;">Detail Buku &#x1F4D6;</h5>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>ID Buku</th>
                                <td>{{ $book->id }}</td>
                            </tr>
                            <tr>
                                <th>ISBN</th>
                                <td>{{ $book->isbn }}</td>
                            </tr>
                            <tr>
                                <th>Judul</th>
                                <td>{{ $book->judul }}</td>
                            </tr>
                            <tr>
                                <th>ID Kategori</th>
                                <td>{{ $book->idkategori }}</td>
                            </tr>
                            <tr>
                                <th>Pengarang</th>
                                <td>{{ $book->pengarang }}</td>
                            </tr>
                            <tr>
                                <th>Penerbit</th>
                                <td>{{ $book->penerbit }}</td>
                            </tr>
                            <tr>
                                <th>Kota Penerbit</th>
                                <td>{{ $book->kota_terbit }}</td>
                            </tr>
                            <tr>
                                <th>Editor</th>
                                <td>{{ $book->editor }}</td>
                            </tr>
                            <tr>
                                <th>File Gambar</th>
                                <td>
                                    <img src="{{ asset('storage/' . $book->file_gambar) }}" style="max-width: 500px; max-height: 500px;">
                                </td>
                            </tr>
                            <tr>
                                <th>Stok</th>
                                <td>{{ $book->stok }}</td>
                            </tr>
                            <tr>
                                <th>Stok Tersedia</th>
                                <td>{{ $book->stok_tersedia }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
