<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      flex-direction: column;
    }
    .greeting {
      font-size: 24px;
      margin-bottom: 20px;
    }
    .button-container {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .btn {
      margin-bottom: 10px;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="greeting">
    Hello, {{ Auth::guard('web')->user()->name }}
  </div>
  <div class="button-container">
    <a href="{{ route('profile.edit') }}" class="btn btn-primary">User Profile</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
      @csrf
      <button type="submit" class="btn btn-primary">Logout</button>
    </form>
  </div>
</div>

<script>
  document.getElementById('logout-form').addEventListener('submit', function(event) {
    if (!confirm('Are you sure you want to logout?')) {
      event.preventDefault(); // Prevent form submission if user cancels
    }
  });
</script>

</body>
</html>
