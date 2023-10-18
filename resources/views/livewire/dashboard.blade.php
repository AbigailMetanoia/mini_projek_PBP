 <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <div class="container-fluid py-4">
      <div class="row">
                <h5 class="font-weight-bolder" style="font-size: 24px;">Selamat Datang di Bookorama &#x1F4DA;</h5>
                <br>
                <br>
                    <div class="col-12">
                        <div class="card mb-4 mx-4">
                            <div class="card-header pb-0">
                                <div class="d-flex flex-row justify-content-between">
                                    <div>
                                        <h5 class="mb-0" style="text-align: center;">Rekomendasi Buku Untukmu !</h5>
                                        <h5>data: {{ $books }}</h5>
                                        {{-- <h5>data: {{ $books['isbn'] }}</h5> --}}
                                    </div>
                                    <div class="search-bar">
                                        {{-- <input  type="text" wire:model='search' placeholder="Search..." id="search-input">
                                        <button class= "btn btn-primary" id="search-button">Search</button> --}}
                                        <div class="input-group">
                                            <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                                            <input type="search" wire:model='search' class="form-control" placeholder="Search...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card-body px-0 pt-0 pb-2">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                ID
                                                </th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                ISBN
                                                </th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Judul
                                                </th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Pengarang
                                                </th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <?php
                                        // if (DB::connection()->getPdo()) {
                                        //     echo "Berhasil terhubung ke database: " . DB::connection()->getDatabaseName();
                                        // }
                                        ?>
                                        @foreach($view_books as $book)
                                        <tr>
                                            {{-- <td class="ps-4">
                                                <p class="text-xs font-weight-bold mb-0">{{ ($users ->currentpage()-1) * $users ->perpage() + $loop->index + 1 }}</p>
                                            </td> --}}
                                            <td style="text-align: center;">{{ $book->id }}</td>
                                            <td style="text-align: center;">{{ $book->isbn }}</td>
                                            <td style="text-align: center;">{{ $book->judul }}</td>
                                            <td style="text-align: center;">{{ $book->pengarang }}</td>
                                            <td style="text-align: center;">
                                                {{-- <a href="{{ route('keranjang', ['id' => $book->id]) }}" class="badge badge-sm bg-gradient-success">Add to Cart</a> --}}
                                                <a wire:click='addToCart({{ $book->id }})' class="badge badge-sm bg-gradient-success">Add to Cart</a>
                                                <a href="{{ route('detailsBook', ['id' => $book->id]) }}" class="badge badge-sm bg-gradient-secondary">Details</a>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </table>
                                    <div class="mt-3 mx-3 d-flex align-items-center justify-content-center text-danger">
                                        {{ $view_books->links() }}
                                    </div>
                                </div>
                            </div>
        </div>
    </div>
  </main>


