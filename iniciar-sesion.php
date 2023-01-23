<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="img/style.css">
</head>
<div class="vh-100 d-flex justify-content-center align-items-center">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-12 col-md-8 col-lg-6">
        <div class="border border-3 border-primary"></div>
        <div class="card bg-white shadow-lg">
          <div class="card-body p-5">
            <form class="mb-3 mt-md-4">
              <img class="logo-book" src="img/logo.png" alt="Bookcomputer" width="450px">
              <h2 class="fw-bold mb-2 text-uppercase ">Iniciar Sesión</h2>
              <div class="mb-3">
                <label for="text" class="form-label ">Usuario</label>
                <input type="text" class="form-control" id="usuario" placeholder="username" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label ">Contraseña</label>
                <input type="password" class="form-control" id="contrasena" placeholder="*******" required>
              </div>
              <div class="d-grid">
                <button class="btn btn-outline-dark" type="submit">Iniciar Sesión</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>