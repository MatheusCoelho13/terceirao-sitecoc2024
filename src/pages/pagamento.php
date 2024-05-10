<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rifa Digital</title>
<style>
    canvas {
        border: 1px solid #000;
    }
</style>
</head>
<body>
<h1>Rifa Digital</h1>
<canvas id="rifaCanvas" width="400" height="200"></canvas>

<script>
// Obter o contexto do canvas
var canvas = document.getElementById('rifaCanvas');
var ctx = canvas.getContext('2d');

// Definir cores e fonte
ctx.fillStyle = '#FFFFFF'; // Cor do fundo
ctx.fillRect(0, 0, canvas.width, canvas.height);

ctx.fillStyle = '#000000'; // Cor do texto
ctx.font = '20px Arial'; // Fonte do texto

// Adicionar texto à imagem
ctx.fillText('Rifa Gerada:', 10, 30);

// Gerar números de rifa aleatórios
for (var i = 0; i < 10; i++) {
    var numero = Math.floor(Math.random() * 100) + 1;
    ctx.fillText('Ticket: ' + numero, 10, 60 + i * 20);
}
</script>
</body>
</html>
