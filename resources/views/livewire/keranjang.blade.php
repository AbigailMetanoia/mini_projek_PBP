<div class="container-fluid py-4">
    <div class="row">
        <h5 class="font-weight-bolder" style="font-size: 24px;">Keranjang &#x1F6D2;</h5>
        {{-- <h5>book: {{ $keranjang }}</h5> --}}
        <br>
        <br>
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between me-6">
                        <div>
                            <h5 class="mb-0" style="text-align: center;">Klik pinjam untuk memproses</h5>
                            <h5>data: {{ $data }}</h5>
                            {{-- <h5>data: {{ $books['isbn'] }}</h5> --}}
                        </div>
                        <div >
                            <a wire:click='pinjamBuku()' class=" bg-gradient-success btn">Pinjam</a>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ISBN
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Judul
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tanggal Pinjam
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <?php
                                      // if (DB::connection()->getPdo()) {
                                      //     echo "Berhasil terhubung ke database: " . DB::connection()->getDatabaseName();
                                      // }
                            ?>
                            @foreach($keranjang as $cart)
                            <tr>
                                <td style="text-align: center;">{{ $cart->id }}</td>
                                <td style="text-align: center;">{{ $cart->isbn }}</td>
                                <td style="text-align: center;a">{{ $cart->judul }}</td>
                                <td style="text-align: center;">{{ $cart->created_at}}</td>
                                <td style="text-align: center;">
                                    {{-- <a href="{{ route('keranjang.delete', ['id' => $cart->id]) }}"
                                        class="badge badge-sm bg-gradient-warning">Delete</a> --}}
                                    <a wire:click='deleteKeranjang({{ $cart->id }})' class="badge badge-sm bg-gradient-warning">Delete</a>
                                </td>
                            </tr>
                            @endforeach

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
