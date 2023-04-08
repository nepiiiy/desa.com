@extends('admindesa.navside')
@section('isi')
<main id="main" class="main">

        <div class="pagetitle">
            <h1>Edit UMKM</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="/struktur_pkk">UMKM</a></li>
                    <li class="breadcrumb-item active">Edit UMKM</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">

            <div class="col-lg-12 ms-auto me-auto">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit UMKM</h5>
   
    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
  
    <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Produk</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control @error('name') is-invalid @enderror" placeholder="Name">
                    @error('name')
                                <div class="invalid-feedback" >{{ $message }}</div>
                                @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis Produk</strong>
                    <textarea class="form-control @error('detail') is-invalid @enderror" style="height:150px" name="detail" placeholder="Detail">{{ $product->detail }}</textarea>
                    @error('detail')
                    <div class="invalid-feedback" >{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No.Telepon</strong>
                    <input type="text" name="no_tlp" value="{{ $product->no_tlp }}" class="form-control @error('no_tlp') is-invalid @enderror" placeholder="No.Telepon">
                    @error('no_tlp')
                    <div class="invalid-feedback" >{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Link</strong>
                    <input type="text" name="link" value="{{ $product->link }}" class="form-control @error('link') is-invalid @enderror" placeholder="Link">
                    @error('link')
                    <div class="invalid-feedback" >{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gambar Produk</strong><br>  
                    <img src="/image/{{ $product->image }}" width="300px" style="margin-bottom: 5px">
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" placeholder="image">
                    @error('image')
                    <div class="invalid-feedback" >{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary" style="margin-top:20px">Ubah</button>
            </div>
        </div>
   
    </form>
    <a href="/products"> <button type="submit" class="btn btn-danger"> Kembali</button></a>
</section>
</main>
@endsection