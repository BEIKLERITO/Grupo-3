<?php
$estudiante = "Caicedo Beikler";
$materia = "Programación Web II";
$notas_simuladas = [75, 88, 55, 92, 60, 45];
$promedio_total = array_sum($notas_simuladas) / count($notas_simuladas);
$nota_central = $notas_simuladas[2];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador de Notas - Etiquetado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <style>
        .marco_principal {
            border: 3px dashed rgba(255, 255, 255, 0.5);
            border-radius: 15px;
            padding: 30px;
            margin: 20px 0;
            background-color: rgb(10, 50, 150);
            color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        }
        .etiqueta-nombre {
            padding: 8px 15px;
            margin: 5px;
            border-radius: 8px;
            background-color: rgb(255, 193, 7);
            color: black;
            font-weight: bold;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        
        <div class="marco_principal text-center">
            <h1>Sistema de Pruebas: <?php echo $materia; ?></h1>
            <p class="lead">Bienvenido, **<?php echo $estudiante; ?>**</p>
        </div>

        <div class="marco_principal">
            <h2 class="text-center mb-4">Sección de Etiquetas Personalizadas</h2>
            
            <div class="text-center mb-4">
                </span>
                <span class="etiqueta-nombre">
                    Pon tu nombre aquí - 1
                </span>
                <span class="etiqueta-nombre">
                    Pon tu nombre aquí - 2
                </span>
                <span class="etiqueta-nombre">
                    Pon tu nombre aquí - 3
                </span>
                <span class="etiqueta-nombre bg-success text-white">
                    Pon tu nombre aquí - 4
                </span>
            </div>
            <hr>

            <h3 class="text-center text-info display-4 mt-4">
                Nota Clave: <?php echo $nota_central; ?>
            </h3>
            
            <?php if ($nota_central < 70): ?>
                <p class="text-center text-warning fs-5">Advertencia: Tu nota central (<?php echo $nota_central; ?>) está por debajo del estándar.</p>
            <?php else: ?>
                <p class="text-center text-success fs-5">¡Excelente! Tu nota central (<?php echo $nota_central; ?>) cumple con el estándar.</p>
            <?php endif; ?>
            
            <hr>

            <div class="mt-4 text-center">
                <h4 class="text-light">Promedio Calculado:</h4>
                <p class="fw-bold fs-3">
                    <span class="badge text-bg-light p-3">
                        <?php echo number_format($promedio_total, 2); ?>
                    </span>
                </p>
                <p class="text-light">*(Suma de <?php echo count($notas_simuladas); ?> notas)*</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>