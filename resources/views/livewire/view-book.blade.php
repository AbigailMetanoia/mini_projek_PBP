<section>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="font-weight-bolder" style="font-size: 24px;">Detail Buku &#x1F4D6;</h5>
                    </div>
                    <div class="card-body">
                        <table class="table ">
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
                            <tr>
                                <th >Rating &#x2B50; </th>
                                <td>
                                    <div class='d-flex align-items-center'>
                                        <span class="me-2 ">{{ round($avgRating,1) }}</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-{{ ($avgRating>1.5?(($avgRating>3.5)?'success':'info'):'danger') }}" role="progressbar" aria-valuenow="{{ $avgRating*20 }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $avgRating*20 }}%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                        </table>
                        {{-- <h5 class="font-weight-bolder" style="font-size: 18px;">Rating &#x2B50; {{ $rating }}</h5> --}}
                    </div>
                    <div class="card mt-4">
                        <div class="card-header py-2">
                            <h5 class="font-weight-bolder" style="font-size: 24px;">Review  {{ $test  }}</h5>
                            {{-- <h5>isbn: {{ $isbn }}</h5> --}}
                        </div>
                        <div class="card-body py-2">
                            <div>
                                @foreach ($ratings as $rating)
                                    <table  class="mb-2 flex">
                                        <thead>
                                            <th>
                                                <div class=" d-flex flex-row rating">
                                                    @for($i = 0; $i < $rating->skor_rating; $i++)
                                                        <i class="fa fa-star rating-color"></i>
                                                    @endfor
                                                    &nbsp;&nbsp;<small class="fw-light">{{$rating->created_at->format('d M Y');}}</small>
                                                </div>
                                            </th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @php
                                                    $komentars =  App\Models\KomentarBuku::where('isbn','=',$this->book['isbn'])->where('noktp','=',$rating->noktp)->get()
                                                @endphp
                                                <tr>

                                                    <th class="fw-normal">
                                                        @foreach ($komentars as $item)
                                                        {{-- <i class="fa fa-star rating-color"></i> --}}
                                                            {{ $item->komentar }}&nbsp;&nbsp;

                                                        @endforeach
                                                    </th>
                                                </tr>

                                            </tr>
                                        </tbody>
                                    </table>
                                    @endforeach
                            </div>

                            {{-- <table class="table table-bordered ">
                                <thead>
                                    <tr>
                                        <th class="border-0 font-weight-bolder">Komentar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="border-0 font-weight-bolder">Komentar</th>

                                    </tr>
                                    @foreach ($reviews as $review)
                                    <tr>
                                        <td class="border">{{ $review->komentar }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table> --}}
                            <form class='my-2' wire:submit.prevent="review" action="#" method="POST" role="form text-left"
                            enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="komentar">Komentar:</label>
                                    <textarea wire:model='komentar' class="form-control disabled" id="komentar" name="komentar" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    @php
                                        $rating = (($isNoKtp != null && $book->isbn === $isNoKtp->isbn) || $ada)
                                    @endphp
                                    <select wire:model='userRating' class="form-control" id="rating" name="rating" {{ ($rating)? 'disabled': '' }}>
                                        @if ($rating)
                                            <option value="{{ $isNoKtp->skor_rating }}" selected>{{ $isNoKtp->skor_rating }}</option>
                                        @else
                                            <option selected>Isi ranting</option>
                                        @endif
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
