<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Spetaq</title>
  <link rel="stylesheet" href="bs/css/bootstrap.css" />
  <link rel="icon" type="image/png" href="logo smataq.png" />
</head>

<body>
  <div class="container py-4">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <img src="login.png" alt="Image" class="img-fluid" />
      </div>
      <div class="col-lg-6">
        <div class="card shadow mt-5">
          <div class="card-body">
            <h3 class="text-center">Login</h3>
            <p class="mt-4">Selamat datang di web pengolah nilai SMP Takhassus Al-Qur'an, silahkan masukkan username dan password</p>
            <div>
              <form method="post" action="cek-login.php">
                <div class="form-group first">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" name="username" />
                </div>
                <div class="form-group last mb-4">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" />
                </div>
                <div class="form-group">
                  <label for="sel1">Pilih Level:</label>
                  <select class="form-control" name="level" id="level">
                    <option>-</option>
                    <option value="admin">Admin</option>
                    <option value="guru">Guru</option>
                    <option value="siswa">Siswa</option>
                  </select>
                </div>
                <div class="d-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                    <input type="checkbox" checked="checked" />
                    <div class="control__indicator"></div>
                  </label>

                </div>
                <div class="d-grid gap-2">
                  <input type="submit" class="btn btn-success" value="Login">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="bs/js/bootstrap.js"></script>
</body>

</html>