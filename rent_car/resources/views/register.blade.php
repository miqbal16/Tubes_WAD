
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="assets/css/login.css" rel="stylesheet" media="all">

  <title>REGISTER</title>
</head>

<body>
<div class="login-page">
    <div class="form">
      <form class="register-form">
        <input type="text" placeholder="name"/>
        <input type="password" placeholder="password"/>
        <input type="text" placeholder="email address"/>
        <button>create</button>
        <p class="message">sudah punya akun? <a href="#">Sign In</a></p>
      </form>
      <form class="login-form" action="{{route('register.register')}}" method="post"> 
      {{ csrf_field() }}
      <input type="name"name="name" id="inputname" class="form-control" placeholder="Please insert your name" required/>
      <input type="email"name="email" id="inputemail" class="form-control" placeholder="email" required/>
      <input type="password"name="password" id="inputpassword" class="form-control" placeholder="password" required/>
      <input type="password"name="passwordconfirmation" id="inputpassword" class="form-control" placeholder="password confirmation" required/>
      <button type="submit" class="btn btn-primary" style="margin: auto; display: block" name="submit" value="submit">Daftar</button>

        
      </form>
    </div>
  </div>
</body>
</html>
