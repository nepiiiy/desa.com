<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from affixtheme.com/html/xmee/demo/register-15.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Apr 2023 03:38:05 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>DESA KITA</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="https://i.postimg.cc/SKnd1ZCd/logo-desa2-removebg-preview.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="log/css/bootstrap.min.css">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="log/css/fontawesome-all.min.css">
	<!-- Flaticon CSS -->
	<link rel="stylesheet" href="log/font/flaticon.css">
	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="log/style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- <meta name="csrf-token" content="{{csrf_token()}}"/> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<style>
		form input+i{
  position:absolute;
  left:7px;
  top:10px;
  color:#777;
}
	</style>
</head>

<body>
	<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

	<section class="fxt-template-animation fxt-template-layout15">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-12 order-md-2 fxt-bg-img" data-bg-image="https://i.postimg.cc/L5S32mnL/dsc-0969e.jpg">
					<div class="fxt-intro">
						<h1>DAFTAR</h1>
						<p>Selamat datang di website DESAKITA. Silahkan daftarkan desa Anda dengan mengisi persyaratan yang sudah ditentukan. Tunggu beberapa hari sampai akun Anda terverifikasi oleh Admin Web.</p>
						<div class="fxt-page-switcher" >
						</div>
					</div>
				</div>
				<div class="col-md-6 col-12 order-md-1 fxt-bg-color">
					<div class="fxt-content">
						<div class="fxt-header">
                        <center><img src="https://i.postimg.cc/XvrB6m2Z/logo-desa1-removebg-preview.png" alt="" style="width: 50%;margin-bottom:25px"></center>
						</div>
							
							<form action="/create" method="post" enctype="multipart/form-data">
                            @csrf
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
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
									<input type="text"  value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" name="name" style="text-indent:2em" placeholder="Nama Desa">
									<svg style=" position:absolute;
  left:3%;
  top:9px;
  color:#777;"xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
  <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5ZM9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8Zm1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Z"/>
  <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12V4Z"/>
</svg>	
								</div>
									
								</div>
								<br>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<input type="text" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" name="email" style="text-indent:2em" placeholder="Email Desa">
										<svg style=" position:absolute;
  left:3%;
  top:9px;
  color:#777;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
</svg>
									</div>
								</div>
								<br>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
									<input type="password"  style="text-indent:2em" class="form-control @error('password') is-invalid @enderror " name="password" placeholder="Password">
									<svg style=" position:absolute;
  left:3%;
  top:9px;
  color:#777;" xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
  <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
</svg>	
								</div>
								</div>
								<br>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-2">
									<input id="password_confirmation" style="text-indent:2em" class="form-control @error('password_confirmation') is-invalid @enderror " placeholder="Konfirmasi Password" type="password" name="password_confirmation" required autocomplete="new-password">
									<svg style=" position:absolute;
  left:3%;
  top:9px;
  color:#777;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
  <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
  <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg>	
								</div>
								</div>
								<br>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-2">
                                        <select class="form-control" name="province_id" id="provinsi" style="text-indent:2em;color:#777;">
                                            <option value="">Pilih Provinsi...</option>
                                            @foreach ($provinsi as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
									<svg style=" position:absolute;
  left:3%;
  top:9px;
  color:#777;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-map" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98 4-.8V1.11l-4 .8v12.98zm-6-.8V1.11l-4 .8v12.98l4-.8z"/>
</svg>	
<svg style=" position:absolute;
  left:92%;
  top:9px;
  color:#777;"
  xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-down" viewBox="0 0 16 16">
  <path d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/>
</svg>
								</div>
								</div>
								<br>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-2">
                                        <select class="form-control" name="regency_id" id="kabupaten" style="text-indent:2em;color:#777;">
                                          
                                        </select>
									
									<svg style=" position:absolute;
  left:3%;
  top:9px;
  color:#777;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
</svg>	
<svg style=" position:absolute;
  left:92%;
  top:9px;
  color:#777;"
  xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-down" viewBox="0 0 16 16">
  <path d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/>
</svg>
								</div>
								</div>
								<br><div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-2">
                                        <select class="form-control" name="district_id" id="kecamatan" style="text-indent:2em;color:#777;">
                                          
                                        </select>
									<svg style=" position:absolute;
  left:3%;
  top:9px;
  color:#777;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
  <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>

<svg style=" position:absolute;
  left:92%;
  top:9px;
  color:#777;"
  xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-down" viewBox="0 0 16 16">
  <path d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/>
</svg>
								</div>
								</div>
								<br><div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-2">
                                    <input type="text" style="text-indent:2em" value="{{ old('kode_pos') }}" class="form-control @error('kode_pos') is-invalid @enderror" name="kode_pos" placeholder="Kode Pos">
									<svg style=" position:absolute;
  left:3%;
  top:9px;
  color:#777;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-mailbox" viewBox="0 0 16 16">
  <path d="M4 4a3 3 0 0 0-3 3v6h6V7a3 3 0 0 0-3-3zm0-1h8a4 4 0 0 1 4 4v6a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V7a4 4 0 0 1 4-4zm2.646 1A3.99 3.99 0 0 1 8 7v6h7V7a3 3 0 0 0-3-3H6.646z"/>
  <path d="M11.793 8.5H9v-1h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.354-.146l-.853-.854zM5 7c0 .552-.448 0-1 0s-1 .552-1 0a1 1 0 0 1 2 0z"/>
</svg>
									
							
									</div>
								</div>
								<br>

							

								
                                <div class="col-12 ">
                                    <div class=" @error('gambar') is-invalid @enderror" >
                                        <label  >Unggah Persetujuan</label>
                                        <input type="file"  name="gambar" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <div class="col-12 ">
                                    <div class="custom-file @error('logo') is-invalid @enderror">
                                        <label  >Unggah logo</label><br>
                                        <input type="file" class="form-control" style="" name="logo" >
                                    </div>
                                </div>
                            
                                <input type="hidden" name="longtitude" value="{{ request()->query('latitude') }}">
                                <input type="hidden" name="latitude" value=" {{ request()->query('longtitude') }} ">
                                
                           
							
								<div class="form-group">
                                <br><br>
									<div class="row">
                                       <div class="col-md-6 col-12 float-left"> <button class="fxt-btn-fill " style="background-color:#0375b4;font-size:90%"><a href="/peta" style="color:#fff; text-decoration:none;">Kembali</a></button>
</div>
										<div class="col-md-6 col-12 float-right"><button id="submit" type="submit" class="fxt-btn-fill" style="background-color:#0375b4; margin-left:66%; font-size:90%">Daftar</button>
</div>
                                    </div>
								</div>
								
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- jquery-->
	<script src="log/js/jquery-3.5.0.min.js"></script>
	<!-- Bootstrap js -->
	<script src="log/js/bootstrap.min.js"></script>
	<!-- Imagesloaded js -->
	<script src="log/js/imagesloaded.pkgd.min.js"></script>
	<!-- Validator js -->
	<script src="log/js/validator.min.js"></script>
	<!-- Custom Js -->
	<script src="log/js/main.js"></script>

</body>
<script>
    $(function() {

        $.ajaxSetup({

            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }

        });


        $('#provinsi').on('change', function() {
            let id_provinsi = $('#provinsi').val();
            $.ajax({
                type: 'POST',
                url: "{{ route('getkabupaten') }}",
                cache: false,
                data: {
                    id_provinsi: id_provinsi
                },
                success: function(msg) {
                    $('#kabupaten').html(msg);
                    $('#kecamatan').html('');
                   
                },
                error: function(data) {
                    console.log('error:', data)
                },
            })
        })

        $('#kabupaten').on('change', function() {
            let id_kabupaten = $('#kabupaten').val();
            $.ajax({
                type: 'POST',
                url: "{{ route('getkecamatan') }}",
                cache: false,
                data: {
                    id_kabupaten: id_kabupaten
                },
                success: function(msg) {
                    $('#kecamatan').html(msg);
                   
                },
                error: function(data) {
                    console.log('error:', data)
                },
            })
        })




    });
</script>


<!-- Mirrored from affixtheme.com/html/xmee/demo/register-15.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Apr 2023 03:38:05 GMT -->
</html>