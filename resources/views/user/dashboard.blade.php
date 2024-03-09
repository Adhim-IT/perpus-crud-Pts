<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>user</h1>
</body>
<li class="nav-item">
    <form method="POST" action="{{ route('logout') }}" class="nav-link">
        @csrf
        <button type="submit" class="btn btn-link">
            <i class="fas fa-sign-out-alt"></i>
            <span style="color: black">Logout</span>
        </button>
    </form>
</li>
</html>
