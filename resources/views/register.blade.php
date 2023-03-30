<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESA.COM</title>
    <link href="https://i.postimg.cc/wj308LVk/images.png" rel="shortcut icon" type="image/png">
    <link rel="stylesheet" type="text/css" href="reg/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="reg/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="reg/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="reg/css/iofrm-theme23.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
<body>
<div class="form-body on-top-mobile">
        <div class="website-logo">
                    <div><img src="https://i.postimg.cc/hGBKT07K/logo-removebg-preview.png" alt="" style="width:200px;"></div>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder simple-info">
                    <div><img src="reg/image-reg/graphic6.svg" alt=""></div>
                    <div><h3>Registrasi</h3></div>
                    <div><p>Masukkan data yang sesuai untuk mendaftarkan desa anda</p></div>
                </div>
            </div>    
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="form-items" >
            <form action="/create" method="post" enctype="multipart/form-data">
            @csrf
           
            
            <div class="row">
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@error('name')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
                                <div class="col-12">
                                    <input type="text " value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nama Desa">
                                    <input type="text" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Desa">
                                </div>
                               
           
            
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <input type="password"   class="form-control @error('password') is-invalid @enderror " name="password" placeholder="Password">
                                </div>
                                <div class="col-12">
                                    <input id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror " placeholder="Konfirmasi Password" type="password" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-3">
                                    <input type="text" value="{{ old('provinsi') }}" class="form-control @error('provinsi') is-invalid @enderror" placeholder="Provinsi" name="provinsi">
                                </div>
                                <div class="col-12 col-sm-3">
                                    <input type="text" value="{{ old('kabupaten') }}" class="form-control @error('kabupaten') is-invalid @enderror" placeholder="Kabupaten" name="kabupaten">
                                </div>
                                <div class="col-12 col-sm-3">
                                    <input type="text" value="{{ old('kecamatan') }}" class="form-control @error('kecamatan') is-invalid @enderror" placeholder="Kecamatan" name="kecamatan">
                                </div>
                                <div class="col-12 col-sm-3">
                                    <input type="text" value="{{ old('kode_pos') }}" class="form-control @error('kode_pos') is-invalid @enderror" name="kode_pos" placeholder="Kode Pos">
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" value="{{ old('koordinat') }}" class="form-control @error('koordinat') is-invalid @enderror" name="koordinat" placeholder="Titik Koordinat">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 ">
                                    <div class="custom-file @error('gambar') is-invalid @enderror">
                                        <label  >Unggah Persetujuan</label>
                                        <input type="file" class="" style="margin-bottom: 7px" name="gambar" >
                                    </div>
                                </div>
                                
                                <div class="col-12 ">
                                    <div class="custom-file @error('logo') is-invalid @enderror">
                                        <label  style="margin-top: 20px">Unggah logo</label>
                                        <input type="file" class="" style="" name="logo" >
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row top-padding">
                                <div class="col-12 col-sm-6">
                                    <label for="chk1">Sudah punya akun ? <a href="/masuk" style="text-decoration: none;">Kembali ke login</a></label>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-button text-right">
                                        <button id="submit" type="submit" class="ibtn less-padding" style="background-color: #F26522; color: #ffffff">Daftar</button>
                                    </div>
                                </div>
                            </div>
            </form>
        </div>
    </div>
</body>
</html>
