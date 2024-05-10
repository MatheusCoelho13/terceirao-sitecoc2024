<?
session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:ital,wght@0,100..700;1,100..700&family=Joti+One&family=Julius+Sans+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Germania+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/formulario.css">
  <title>cadastro da rifa</title>
</head>
<body>
  <h1 id="h1_title">Cadastro de rifa</h1>
  <h2 id="h2_subtitle"> rifa de pascoa</h2>
  <h3 id="copyright"> copyright Terceirao Coc 2024</h3>
  <form id="cad-usuario-form" action="../api/cadastrorifa.php" method="Post" >
                    <input type="text" name="nome" class="form-control" placeholder="nome" id="nome_input" autocomplete="off" maxlength="20" require>
                    <input type="email" name="email" class="form-control" placeholder="email"  id="email_input"autocomplete="off" require>
                    <input type="text" class="form-control" placeholder="Telefone" id="celular" name="telefone" ></div>
                    <input type="text" name="rifaquantidade"  id="numero_input1"class="for_12" placeholder="quantidade da rifa" autocomplete="off" require>
                    <input type="text" name="rifanumber"  id="numero_input"class="for_1" placeholder="número da rifa" autocomplete="off" require>
                    <button class="btn_TO" onclick="" href="./pagamento.php"><p id="h_text">Ir para pagamento</p></a></
             <!-- fazer o esse botao com sweet alert -->
  </form>
  <img src="../assets/logologo.svg" alt="logo"
  id="logo_1">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../api/index.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
                $(document).ready(function() {
                    $('#celular').mask('(00) 0000-00000');
                  });
                  $(document).ready(function(){
                    $('#numero_input').mask('#0009' ,{placeholder:"#1234"});
                    //! muito chato essa porra
                  })
                  Swal.fire({
  title: "verificando rifas ",
  html: " estamos verificando se ha rifas disponivel  neste momento",
  timer: 3000,
  timerProgressBar: true,
  showConfirmButton: false,
  
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
    Swal.fire({
  position: "center",
  icon: "success",
  title: " Verificado com sucesso",
  showConfirmButton: false,
  timer: 2100
});
  }
});

                </script>
           
</body>
</html>