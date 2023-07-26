<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tela de Login</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  
</head>

<body>
 <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h1 class="text-center">Login</h1>
        <form>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Digite o seu email">
          </div>
          <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" class="form-control" id="password" placeholder="Digite a sua senha">
          </div>
          <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
      </div>
    </div>
  </div>

  <script src="{{ asset('js/login.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
