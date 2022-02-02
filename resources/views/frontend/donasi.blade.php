@extends('layouts.master')
@section('content')
<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="{{ route('storeDonasi') }}" method="post" class="php-email-form" enctype="multipart/form-data">
                @csrf
                <div class="row">
                <div class="form-group">
                    <label for="">Masukan Nama</label>
                    <input type="text" name="nama"
                        class="form-control @error('nama') is-invalid @enderror">
                    @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <br>
                <div class="form-group">
                    <label for="">Masukan Email</label>
                    <input type="email" name="email"
                        class="form-control @error('email') is-invalid @enderror">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <br>
                <div class="form-group">
                    <label for="">Masukan Nomer telepon</label>
                    <input type="text" name="no_tlpn"
                        class="form-control @error('no_tlpn') is-invalid @enderror">
                    @error('no_tlpn')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <br>
                <div class="form-group">
                    <label for="">Masukan Pesan</label>
                    <input type="text" name="ket"
                        class="form-control @error('ket') is-invalid @enderror">
                    @error('ket')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <br>
                <div class="form-group">
                    <label for="">Masukan Nominal</label>
                    <input type="text" name="nominal"
                        class="form-control @error('nominal') is-invalid @enderror">
                    @error('nominal')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <br>
                <div class="form-group">
                    <label for="">Masukan Bukti Transfer </label>
                    <input type="file" name="bukti" class="form-control @error('bukti') is-invalid @enderror">
                    @error('bukti')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="text-center">
                    <button type="submit">
                        D O N A S I
                    </button>
                </div>
                </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
@endsection
