<div class="row">
    <div class="row">
                      <h5 class="font-weight-bolder" style="font-size: 24px;">Riwayat Transaksi &#x23F2;</h5>
                      <br>
                      <br>
                          <div class="col-12">
                              <div class="card mb-4 mx-4">
                                  <div class="card-body px-0 pt-0 pb-2">
                                      <div class="table-responsive p-0">
                                          <table class="table align-items-center mb-0">
                                              <thead>
                                                  <tr>
                                                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                      ID TRANSAKSI
                                                      </th>
                                                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                      ID BUKU
                                                      </th>
                                                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                      Tanggal Kembali
                                                      </th>
                                                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                      Denda
                                                      </th>
                                                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                      Petugas
                                                      </th>
                                                  </tr>
                                              </thead>
                                              <?php
                                              // if (DB::connection()->getPdo()) {
                                              //     echo "Berhasil terhubung ke database: " . DB::connection()->getDatabaseName();
                                              // }
                                              ?>
                                              @foreach($detail_transaksi as $riwayat)
                                                    <tr>
                                                        <td style="text-align: center;">{{ $riwayat->idtransaksi }}</td>
                                                        <td style="text-align: center;">{{ $riwayat->idbuku }}</td>
                                                        <td style="text-align: center;">{{ $riwayat->tgl_kembali }}</td>
                                                        <td style="text-align: center;">{{ $riwayat->denda }}</td>
                                                        <td style="text-align: center;">{{ $riwayat->idpetugas }}</td>
                                                    </tr>
                                              @endforeach
                                          </table>
                                      </div>
                                  </div>
              </div>
          </div>
    </div>
  </div>
