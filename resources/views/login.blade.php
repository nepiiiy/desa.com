<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from affixtheme.com/html/xmee/demo/login-15.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Apr 2023 03:37:14 GMT -->
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
</head>

<body>
	<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    
	<section class="fxt-template-animation fxt-template-layout15">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-12 fxt-bg-img" data-bg-image="https://i.postimg.cc/L5S32mnL/dsc-0969e.jpg">
					<div class="fxt-intro">
						<h1>MASUK</h1>
						<p>Selamat datang di website DESAKITA. Untuk masuk ke halaman admin website DESAKITA, silahkan Anda memasukkan email dan password yang telah terverifikasi sebelumnya.</p>
							<div class="fxt-page-switcher" >
								
							</div>
					</div>
				</div>
				<div class="col-md-6 col-12 fxt-bg-color">
					<div class="fxt-content">
						<div class="fxt-header">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(session('status'))
    <div class="alert alert-info">
        {{ session('status') }}
    </div>
@endif
						</div>
                        <center><img src="https://i.postimg.cc/XvrB6m2Z/logo-desa1-removebg-preview.png" alt="" style="width: 50%;"></center>
						<br><br>
							<form action="{{ route('mauk') }}" method="POST">
                            @csrf	
                                <div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<input type="text" name="email" class="form-control" style="text-indent:2em" placeholder="Email Desa">
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
									<div class="fxt-transformY-50 fxt-transition-delay-2">
										<input type="password" name="password" class="form-control" style="text-indent:2em" placeholder="Password">
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
									<div class="fxt-transformY-50 fxt-transition-delay-3">
										<div class="fxt-content-between">
										<label for="chk1">Belum punya akun ? Silahkan daftar<a href="/peta" style="text-decoration: none;"> disini</a></label>
										<label for="chk1">Lupa password klik <a href="forgot-password" style="text-decoration: none;"> disini</a></label>
											<button id="submit" type="submit" class="fxt-btn-fill" style="background-color:#0375b4; margin-left:66%; font-size:95%">Masuk</button>
										</div>
									</div>
								</div>
							</form>
						
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


<!-- Mirrored from affixtheme.com/html/xmee/demo/login-15.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Apr 2023 03:37:22 GMT -->
</html>