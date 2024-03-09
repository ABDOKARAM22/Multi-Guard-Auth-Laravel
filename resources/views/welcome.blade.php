<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcom Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-box {
      width: 300px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #f9f9f9;
      text-align: center;
      margin-bottom: 20px; 
    }
    h1 {
      text-align: center;
      font-size: 36px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
  </style>
</head>
<body>

  @unless(auth('admin')->check() || auth()->check())
  <div class="container">
      <div class="login-box">
          <h2>User Login</h2>
          <a href="{{ route('login') }}" class="btn btn-primary">Login as User</a>
          <a href="{{ route('register') }}" class="btn btn-secondary mt-3">Register as User</a>
      </div>
      <div class="login-box ml-3">
          <h2>Admin Login</h2>
          <a href="{{ route('admin.login') }}" class="btn btn-primary">Login as Admin</a>
          <a href="{{ route('admin.register') }}" class="btn btn-secondary mt-3">Register as Admin</a>
      </div>
  </div>
  @endunless
  

<div class="container">
  @if(Auth::guard('admin')->check())
    <div class="login-box">
        <h2>Admin Logout</h2>
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
          </form>
        </div>
    @endif
    @if (Auth::guard('web')->check())
    <div class="login-box">
        <h2>User Logout</h2>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
    @endif
</div>

</body>
</html>
