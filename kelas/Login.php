<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<head>
    <title>LOGIN</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<body id="LoginForm">
<nav class="navbar navbar-expand-lg navbar-light bg-#f1c40f">
  <a class="navbar-brand" href="home.php">Assalaam</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../kelas/create.php">Tambah <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../kelas/index.php">Semua Data</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <a href="../kelas/Login.php"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">LOGIN</button></a>
    </form>
  </div>
</nav>
<div class="main-content2">
    <form action="../kelas/Loginpro.php" method="post">
        <center><img src="Foto/assalaam.png" alt="ERROR" width="300px" heigth="250px"></center>
        <div class="login-form">
            <div class="main-div">
                <div class="panel">
                    <h2>User Login</h2>
                        <p>Mohon Masukkan Email dan Password Anda</p>
                </div>
        <form id="Login">
        <div class="form-group">
            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email Address">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
        </div>
        <div class="forgot">
        <a href="reset.html">Lupa password?</a>
        </div>
        <button type="submit" name="Login" class="btn btn-primary">Login</button>
    </div>
    </div>
    </div>
    </form>   
  </div>
</body>
</html>