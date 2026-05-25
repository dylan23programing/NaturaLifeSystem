<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Natural Life - Login</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: url('fondo-naturaleza.jpg') no-repeat center center fixed;
      background-size: cover;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      background: rgba(255, 255, 255, 0.9);
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.2);
      width: 350px;
      text-align: center;
    }

    .login-container h2 {
      color: #2e7d32;
      margin-bottom: 10px;
      font-family: 'Georgia', serif;
    }

    .login-container p {
      color: #555;
      margin-bottom: 20px;
    }

    .login-container input {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
    }

    .login-container button {
      width: 100%;
      padding: 12px;
      background: #2e7d32;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .login-container button:hover {
      background: #1b5e20;
    }

    .login-container a {
      display: block;
      margin-top: 15px;
      color: #2e7d32;
      text-decoration: none;
      font-size: 14px;
    }

    .login-container a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>🌱 Natural Life</h2>
    <p>Ingresa a tu cuenta</p>
    <form method="post" action="<?= base_url('login/authenticate') ?>">
      <input type="text" name="username" placeholder="Usuario" required>
      <input type="password" name="password" placeholder="Contraseña" required>
      <button type="submit">Iniciar Sesión</button>
    </form>
    <a href="#">¿Olvidaste tu contraseña?</a>
    <a href="#">¿No tienes cuenta? Regístrate</a>
  </div>
</body>
</html>
