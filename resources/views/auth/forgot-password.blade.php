<html>
  <head>
  <title>DESAKITA</title>
	<link href="https://i.postimg.cc/SKnd1ZCd/logo-desa2-removebg-preview.png" rel="shortcut icon" type="image/png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body style="background-image:url('https://i.postimg.cc/rpcnJVrS/dsc-0969ey.jpg');background-repeat:no-repeat; background-size:cover;">
  <div style="    padding-top: 120px;" class="form-gap"></div>
<div class="container" >
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Lupa Password?</h2>
                  <p>Kamu bisa reset password disini.</p>
             



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
    <div class="panel-body">
    
                    <form action="{{ route('password.email') }}"  method="post">
    @csrf
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input id="email" name="email" placeholder="Alamat Email" class="form-control"  type="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <input class="btn login_btn" style="background-color:#3498db; color:#fff;" type="submit">
                      </div>
                      
                      {{-- <input type="hidden" class="hide" name="token" id="token" value="">  --}}
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
  </body>
</html>