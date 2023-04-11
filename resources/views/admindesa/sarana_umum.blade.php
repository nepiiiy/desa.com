@extends('admindesa.navside')
@section('isi')
@include('sweetalert::alert')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Sarana</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboardadmindesa">Home</a></li>
          <li class="breadcrumb-item">Sarana</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-13 ms-auto me-auto">

          <div class="card">

            <div class="card-body">
              <h5 class="card-title">Sarana Umum</h5>
              <!-- Primary Color Bordered Table -->
              <form action ="/updatesarana/{{ $data->id }}" method="POST">
              @csrf
              <table  class="table table-bordered border-primary" >
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Sarana</th>
                    <th scope="col">Jumlah</th>
                  </tr>
                </thead>
                <tbody>
      
                  <tr>
                    <th scope="row">1</th>
                    <td>Balai RW</td>
                    <td>
                    <input type="number" class="form-control @error('rw') is-invalid @enderror" id="rw" name="rw"  value="{{ $data->rw }}">
                    @error('rw')
                      <div class="invalid-feedback" >{{ $message }}</div>
                    @enderror
                      </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Balai RT</td>
                    <td>
                    <input type="number" class="form-control @error('rt') is-invalid @enderror" id="rt" name="rt" value="{{ $data->rt }}">
                    @error('rt')
                      <div class="invalid-feedback" >{{ $message }}</div>
                    @enderror
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>PAUD</td>
                    <td>
                    <input type="number" class="form-control @error('paud') is-invalid @enderror" id="paud" name="paud" value="{{ $data->paud }}">
                    @error('paud')
                      <div class="invalid-feedback" >{{ $message }}</div>
                    @enderror
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>TK</td>
                    <td>
                    <input type="number" class="form-control @error('tk') is-invalid @enderror" id="tk" name="tk" value="{{ $data->tk }}">
                    @error('tk')
                      <div class="invalid-feedback" >{{ $message }}</div>
                    @enderror
                  </td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>SD</td>
                    <td>
                    <input type="number" class="form-control @error('sd') is-invalid @enderror" id="sd" name="sd" value="{{ $data->sd }}">
                    @error('sd')
                      <div class="invalid-feedback" >{{ $message }}</div>
                    @enderror
                  </td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>SMP</td>
                    <td>
                    <input type="number" class="form-control @error('smp') is-invalid @enderror" id="smp" name="smp" value="{{ $data->smp }}">
                    @error('smp')
                      <div class="invalid-feedback" >{{ $message }}</div>
                    @enderror
                  </td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td>SMA/SMK</td>
                    <td>
                    <input type="number" class="form-control @error('sma') is-invalid @enderror" id="sma" name="sma" value="{{ $data->sma }}">
                    @error('sma')
                      <div class="invalid-feedback" >{{ $message }}</div>
                    @enderror
                  </td>
                  </tr>
                  <tr>
                    <th scope="row">8</th>
                    <td>Rumah Sakit</td>
                    <td>
                    <input type="number" class="form-control @error('rumah') is-invalid @enderror" id="rumah" name="rumah" value="{{ $data->rumah }}">
                    @error('rumah')
                      <div class="invalid-feedback" >{{ $message }}</div>
                    @enderror
                  </td>
                  </tr>
                  <tr>
                    <th scope="row">9</th>
                    <td>Puskesmas</td>
                    <td>
                    <input type="number" class="form-control @error('puskesmas') is-invalid @enderror" id="puskesmas" name="puskesmas" value="{{ $data->puskesmas }}">
                    @error('puskesmas')
                      <div class="invalid-feedback" >{{ $message }}</div>
                    @enderror  
                  </td>
                  </tr>
                  <tr>
                    <th scope="row">10</th>
                    <td>Pos Kesehatan Desa</td>
                    <td>
                    <input type="number" class="form-control @error('kesehatan') is-invalid @enderror" id="kesehatan" name="kesehatan" value="{{ $data->kesehatan }}">
                    @error('kesehatan')
                      <div class="invalid-feedback" >{{ $message }}</div>
                    @enderror
                  </td>
                  </tr>
                  <tr>
                    <th scope="row">11</th>
                    <td>Posyandu</td>
                    <td>
                    <input type="number" class="form-control @error('posyandu') is-invalid @enderror" id="posyandu" name="posyandu" value="{{ $data->posyandu }}">
                    @error('posyandu')
                      <div class="invalid-feedback" >{{ $message }}</div>
                    @enderror
                  </td>
                  </tr>
                  <tr>
                    <th scope="row">12</th>
                    <td>Pos KB</td>
                    <td>
                    <input type="number" class="form-control @error('kb') is-invalid @enderror" id="kb" name="kb" value="{{ $data->kb }}">
                    @error('kb')
                      <div class="invalid-feedback" >{{ $message }}</div>
                    @enderror
                  </td>
                  </tr>
                  <tr>
                    <th scope="row">13</th>
                    <td>Praktik Dokter</td>
                    <td>
                    <input type="number" class="form-control @error('dokter') is-invalid @enderror" id="dokter" name="dokter" value="{{ $data->dokter }}">
                    @error('dokter')
                      <div class="invalid-feedback" >{{ $message }}</div>
                    @enderror
                  </td>
                  </tr>
                  <tr>
                    <th scope="row">14</th>
                    <td>Praktik Bidan</td>
                    <td>
                    <input type="number" class="form-control @error('bidan') is-invalid @enderror" id="bidan" name="bidan" value="{{ $data->bidan }}">
                    @error('bidan')
                      <div class="invalid-feedback" >{{ $message }}</div>
                    @enderror
                  </td>
                  </tr>


                </tbody>
              </table>
              <button type="submit" style="margin-left: 90%" class="btn btn-primary">Simpan</button>
            </form>
              <!-- End Primary Color Bordered Table -->
            </div>
          </div>


    </section>

  </main><!-- End #main -->

@endsection
