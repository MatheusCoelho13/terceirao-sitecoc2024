<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rifa Digital</title>
<style>
    #rifaCanvas {
        width: 400px;
        height: 200px;
    }
</style>
</head>
<body>
<h1>Rifa Digital</h1>
<canvas id="rifaCanvas"></canvas>

<?php
// Obter o elemento canvas
$canvas = '<script>document.write(\'<canvas id="rifaCanvas"></canvas>\');</script>';
echo $canvas;

// Definir gradiente linear de fundo
$gradient = "<script>var canvas = document.getElementById('rifaCanvas'); var ctx = canvas.getContext('2d'); var gradient = ctx.createLinearGradient(0, 0, canvas.width, canvas.height); gradient.addColorStop(0, '#763294'); gradient.addColorStop(0.2, '#d11069'); gradient.addColorStop(0.4, '#eb571b'); gradient.addColorStop(0.6, '#c0a400'); gradient.addColorStop(1, '#29e131'); ctx.fillStyle = gradient; ctx.fillRect(0, 0, canvas.width, canvas.height);</script>";
echo $gradient;

// Adicionar texto
$texto = "<script>var ctx = canvas.getContext('2d'); ctx.fillStyle = '#FFFFFF'; ctx.font = '20px Arial'; ctx.fillText('Rifa Digital', 10, 30);</script>";
echo $texto;
?>
</body>
</html>
