<div class="container-fluid py-4">
            <div class="row">
                      <h5 class="font-weight-bolder" style="font-size: 24px;">Keranjang &#x1F6D2;</h5>
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
                                                      ID
                                                      </th>
                                                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                      ISBN
                                                      </th>
                                                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                      Judul
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
                                              {{-- @foreach($view_books as $book)
                                              <tr>
                                                  <td style="text-align: center;">{{ $book->id }}</td>
                                                  <td style="text-align: center;">{{ $book->isbn }}</td>
                                                  <td style="text-align: center;">{{ $book->author }}</td>
                                                  <td style="text-align: center;">{{ $book->title }}</td>
                                                  <td style="text-align: center;">{{ $book->price }}</td>
                                                  <td style="text-align: center;">
                                                      <a class="badge badge-sm bg-gradient-success">Add to Cart</a>
                                                      <a class="badge badge-sm bg-gradient-secondary">Details</a>
                                                  </td>
                                              </tr>
                                               @endforeach --}}

                                          </table>
                                      </div>
                                  </div>
              </div>
          </div>
    </div>
</div>
