<section>
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
                                <div class="text-center">
                                    <img src="{{ asset('storage/img/' . $book->file_gambar) }}" style="max-width: 500px; max-height: 500px;" class="img-fluid" alt="Gambar Buku">
                                </div>
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
                    <div class="card mt-4">
                        <div class="card-header">
                            <h5 class="font-weight-bolder" style="font-size: 24px;">Review dan Rating &#x2B50;</h5>
                            {{-- <h5>isbn: {{ $isbn }}</h5> --}}
                        </div>
                        <div class="card-body">
                             <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Review</th>
                                            <th>Rating</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($reviews as $review)
                                        <tr>
                                            <td>{{ $review->komentar }}</td>
                                            <td>{{ $review->skor_rating }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            <form wire:submit.prevent="review" action="#" method="POST" role="form text-left"
                            enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="komentar">Komentar:</label>
                                    <textarea class="form-control" id="komentar" name="komentar" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="rating">Rating:</label>
                                    <select class="form-control" id="rating" name="rating">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Kirim Review</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
