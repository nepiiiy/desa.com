<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

</head>
<body>
    
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

      <form action="{{route ('password.update')}}" method="post">
        @csrf
        <input type="hidden" name="token" value="{{request()->token}}">
        <input type="hidden" name="email" value="{{request()->email}}">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
        <label for="password_confirmation" class="form-label">Password Confirmation</label>
        <input type="password" class="form-control" name="password_confirmation"> <input type="submit" value="Update Password" class="btn btn-primary w-100 mt-3">
      </form>



</body>
</html>