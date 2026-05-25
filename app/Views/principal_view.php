<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Natural Life - Principal</title>
    <style>
       body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      background: #f5f9f6;
      color: #333;
    }
    header {
      background: #2e7d32;
      color: white;
      text-align: center;
      padding: 40px 20px;
    }
    header h1 {
      margin: 0;
      font-size: 2.5em;
    }
    .descripcion {
      max-width: 900px;
      margin: 40px auto;
      text-align: justify;
      line-height: 1.6;
      font-size: 18px;
      padding: 0 20px;
    }
    .imagenes {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 20px;
      margin: 30px auto;
      max-width: 1000px;
    }
    .imagenes img {
      width: 300px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }
    .cta {
      text-align: center;
      margin: 40px;
    }
    .cta a {
      background: #2e7d32;
      color: white;
      padding: 15px 30px;
      border-radius: 8px;
      text-decoration: none;
      font-size: 18px;
      transition: background 0.3s;
    }
    .cta a:hover {
      background: #1b5e20;
    }
    </style>
</head>
<body>
    <header>
        <h1>Natural Life</h1>
        <p>Bienvenido al sistema experto online de diagnóstico de enfermedades de plantas</p>
    </header>

    <section class="descripcion">
    <p>
      En <strong>Natural Life</strong> creemos en el poder de la naturaleza para mejorar tu bienestar. 
      Ofrecemos productos cuidadosamente seleccionados que respetan el medio ambiente y promueven un estilo de vida saludable. 
      Nuestra misión es acercarte lo mejor de la tierra con calidad y confianza.
    </p>
    <p>
      Descubre cómo nuestros productos pueden ayudarte a vivir de manera más equilibrada, 
      con ingredientes naturales y procesos responsables. 
      ¡Tu salud y la del planeta son nuestra prioridad!
    </p>
  </section>

  <section class="imagenes">
    <img src="<?= base_url('images/imagenPrincipal1.webp') ?>" alt="Productos naturales">
    <img src="<?= base_url('images/imagenPrincipal2.jpg') ?>" alt="Bienestar y salud">
    <img src="<?= base_url('images/imagenPrincipal3.jpg') ?>" alt="Vida saludable">
  </section>

  <div class="cta">
    <a href="<?= site_url('Consultar') ?>">Ver beneficios</a>
    <a href="<?= site_url('Mantenimiento') ?>">Mantenimiento</a>
  </div>

</body>
<footer>
    <p style="text-align: center; padding: 20px; background: #2e7d32; color: white;">
        &copy; <?= date('Y') ?> Natural Life. Todos los derechos reservados.
    </p>
</footer>
</html>