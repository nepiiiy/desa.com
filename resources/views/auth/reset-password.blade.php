<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
    
<head>
	<title>DESAKITA</title>
	<link href="https://i.postimg.cc/SKnd1ZCd/logo-desa2-removebg-preview.png" rel="shortcut icon" type="image/png">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
<style>	
		body,
		html {
			margin: 0;
			padding: 0;
			height: 100%;
      background-repeat:no-repeat;
      background-size:cover;
	    background-image: url("https://i.postimg.cc/rpcnJVrS/dsc-0969ey.jpg");
      
		}

		.user_card {
			height: 335px;
			width: 480px;
			margin-top: auto;
			margin-bottom: auto;
			background: #fff;
			position: relative;
			display: flex;
			justify-content: center;
			flex-direction: column;
			padding: 10px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			border-radius: 5px;

		}
		.brand_logo_container {
			position: absolute;
			height: 170px;
			width: 170px;
			top: -58px;
			border-radius: 50%;
      margin-left:%;
			text-align: center;
		}
		.brand_logo {
			height: 100px;
			width: 150px;
			border-radius: 50%;
			
		}
		.form_container {
			margin-top: 7px;
		}
		.login_btn {
			width: 360px;
			background: #3498db !important;
			color: white !important;
		}
		.login_btn:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.login_container {
			padding: 0 2rem;
		}
		.input-group-text {
			background: #3498db !important;
			color: white !important;
			border: 0 !important;
			border-radius: 0.25rem 0 0 0.25rem !important;
		}
		.input_user,
		.input_pass:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
			background-color: purple !important;
		}</style>
</head>

<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">	
						<img src="https://i.postimg.cc/vmc1P87n/png-transparent-computer-icons-mobile-app-development-android-my-account-icon-blue-text-logo-removeb.png" class="brand_logo" alt="Logo">
						
					</div>
				</div>
				<br><br><br>
				<h3><center>Reset Password</center></h3>
				@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    @if(session()->has('status')) 
    <div class="alert alert-success">
      {{ session()->get('status') }}
     </div>

      @endif

				<div class="d-flex justify-content-center form_container">
					<form form action="{{route ('password.update')}}" method="post">
					@csrf
					<input type="hidden" name="token" value="{{request()->token}}">
        <input type="hidden" name="email" value="{{request()->email}}">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-lock"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_user" value="" placeholder="Password">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password_confirmation" class="form-control input_pass" value="" placeholder="Konfirmasi Password">
						</div>
						<br>
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<input type="submit" value="Simpan" name="button" class="btn login_btn">
				   </div>
					</form>
				</div>
		
		
			</div>
		</div>
	</div>
</body>
</html>
