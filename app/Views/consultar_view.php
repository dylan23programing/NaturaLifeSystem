<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de consulta</title>
    <style>
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        th {
            background: #2e7d32;
            color: white;
        }
        td input[type="checkbox"] {
            transform: scale(1.2);
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            background: #2e7d32;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #1b5e20;
        }
    </style>
</head>
<body>
    <h1>Natural Life - Consulta de Beneficios</h1>
    <h3> Elegir los beneficios que sea obtener con nuestros productos</h3>

    <form action="<?= site_url('Consultar/obtenerBeneficios') ?>" method="post">
        <table>
            <thead>
                <tr>
                    <th>Seleccionar</th>
                    <th>Beneficio</th>
                </tr>
            </thead
            <tbody>
                <?php foreach ($hechos as $hecho): ?>
                <tr>
                    <td>
                        <input type="checkbox" name="beneficios[]" value="<?= $hecho['id_hecho'] ?>">
                    </td>
                    <td><?= $hecho['hecho'] ?></td>
                </tr>    
                <?php endforeach; ?>
            </tbody>
        </table>
        
        <div style="text-align:center;">
            <button type="submit">Consultar</button>
        </div>

    
</body>
</html>