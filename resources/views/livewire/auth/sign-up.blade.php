<section class="h-100-vh mb-8">
    <div class="page-header align-items-start section-height-50 pt-5 pb-11 m-3 border-radius-lg"
        style="background-image: url('../assets/img/books2.jpg');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center mx-auto">
                    <h1 class="text-white mb-2 mt-5">{{ __('Selamat Datang di Bookorama') }}</h1>
                    <p class="text-lead text-white">
                        {{ __('Isi Form dibawah ini untuk membuat Akun Anggota !') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10">
            <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                <div class="card z-index-0">
                    <div class="card-header text-center pt-4">
                        <h5>{{ __('Form Regristrasi') }}</h5>
                        <h5>data: {{ $data }}</h5>
                    </div>
                    <div class="row px-xl-5 px-sm-4 px-3">
                    </div>
                    <div class="card-body">

                        <form wire:submit.prevent="register" action="#" method="POST" role="form text-left"
                            enctype="multipart/form-data">
                            <div class="mb-3">
                                <div class="@error('noktp') border border-danger rounded-3  @enderror">
                                    <input wire:model="noktp" type="text" class="form-control" placeholder="Nomor KTP"
                                        aria-label="noktp" aria-describedby="email-addon">
                                </div>
                                @error('noktp') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                            <div class="mb-3">
                                <div class="@error('name') border border-danger rounded-3  @enderror">
                                    <input wire:model="name" type="text" class="form-control" placeholder="Name"
                                        aria-label="Name" aria-describedby="email-addon">
                                </div>
                                @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                            <div class="mb-3">
                                <div class="@error('alamat') border border-danger rounded-3  @enderror">
                                    <input wire:model="alamat" type="text" class="form-control" placeholder="Alamat"
                                        aria-label="alamat" aria-describedby="email-addon">
                                </div>
                                @error('alamat') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                            <div class="mb-3">
                                <div class="@error('kota') border border-danger rounded-3  @enderror">
                                    <input wire:model="kota" type="text" class="form-control" placeholder="Kota"
                                        aria-label="kota" aria-describedby="email-addon">
                                </div>
                                @error('kota') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                            <div class="mb-3">
                                <div class="@error('no_telp') border border-danger rounded-3  @enderror">
                                    <input wire:model="no_telp" type="text" class="form-control"
                                        placeholder="Nomor Telepon" aria-label="no_telp" aria-describedby="email-addon">
                                </div>
                                @error('no_telp') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                            <div class="mb-3">
                                <div class="@error('email') border border-danger rounded-3 @enderror">
                                    <input wire:model="email" type="email" class="form-control" placeholder="Email"
                                        aria-label="Email" aria-describedby="email-addon">
                                </div>
                                @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                            <div class="mb-3">
                                <div class="@error('password') border border-danger rounded-3 @enderror">
                                    <input wire:model="password" type="password" class="form-control"
                                        placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                                </div>
                                @error('password') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>

                            {{-- Upload File KTP --}}
                            <div class="mb-3">
                                <label for="file_ktp" class="form-label">Upload File KTP</label>
                                <input wire:model="file_ktp" class="form-control" type="file" id="file_ktp"
                                    name="file_ktp" placeholder="Upload Foto KTP">
                                @error('file_ktp') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>


                            <div class="form-check form-check-info text-left">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{ __('I agree the') }} <a href="javascript:;"
                                        class="text-dark font-weigh t-bolder">{{ __('Terms
                                        and
                                        Conditions') }}</a>
                                </label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign up</button>
                            </div>
                            <p class="text-sm mt-3 mb-0">{{ __('Sudah punya Akun? ') }}<a href="{{ route('login') }}"
                                    class="text-dark font-weight-bolder">{{ __('Sign in') }}</a>
                            </p>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
