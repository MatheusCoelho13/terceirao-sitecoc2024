// Recuperar do HTML o SELETOR cad-usuario-form com JavaScript

const cadUsuarioForm = document.getElementById("cad-usuario-form");


// Verificar se a constante cadUsuarioForm é TRUE
if (cadUsuarioForm) {

    // Aguardar e identificar o clique do usuário no botão cadstrar com JavaScript
    cadUsuarioForm.addEventListener("submit", async (e) => {

        // Bloquear o recarregamento da página com JavaScript
        e.preventDefault();

        // Receber os dados do formulário com JavaScript
        const dadosForm = new FormData(cadUsuarioForm);

        // Enviar os dados do JavaScript para o PHP
        const dados = await fetch("../../src/api/cadastrorifa.php", {
            method: "POST", // Enviar os dados do JavaScript para o PHP através do método POST
            body: dadosForm, // Enviar os dados do JavaScript para o PHP
        });

        // Ler o retorno do PHP com JavaScript
        const resposta = await dados.json();

        // Verificar com JavaScript se cadastrou no banco de dados
        if (resposta['true']) {
            // Usar o SweetAlert para apresentar a mensagem após cadastrar no banco de dados com PHP
            swal.fire({
                title:"rifa reservada com sucesso",
                text: resposta['msg'],
                icon: 'success',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'ir para o pagamento'
            }).then((result) => {
                if (result.isConfirmed) {
                  Swal.fire({
                   title:"Pagamento",
                   icon:"info",
                   text:"escolha a opiçao de pagamento",
                   showConfirmButton: true,
                   showCancelButton:true,
                   cancelButtonText: 'por dinheiro',
                   confirmButtonText: 'Pagar por pix',
                   }).then((result) => {
                   Swal.fire({
                    title:"Pagamento por pix",
                    icon:"question",
                    text:"por favor pague",
                    showConfirmButton: true,
                    showCancelButton:true,
                    confirmButtonText: 'Pagar por pix',
                   })
                  });
                }
              });

            // Limpar o formulário com JavaScript
            cadUsuarioForm.reset();
        } else {
            // Usar o SweetAlert para apresentar a mensagem de erro após não cadastrar no banco de dados com PHP
            swal.fire({
                text: resposta['msg'],
                icon: 'error',
                text:"ops  tente em outro momento",
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Fechar'
            });
        }
        if (resposta['status1']) {
            // Usar o SweetAlert para apresentar a mensagem após cadastrar no banco de dados com PHP
            swal({
                text: resposta['msg'],
                icon: 'warning',
                showCancelButton: false,
                confirmButtonColor: '#E1A80E',
                confirmButtonText: 'Fechar'
            });

            // Limpar o formulário com JavaScript
            cadUsuarioForm.reset();
        } 
        
    });


}
//! criar codigo para gerar a rifa 
var canvas = document.getElementById('rifaCanvas');
var ctx = canvas.getContext('2d');

// Definir gradiente linear de fundo
var gradient = ctx.createLinearGradient(0, 0, canvas.width, canvas.height);
gradient.addColorStop(0, '#763294');
gradient.addColorStop(0.2, '#d11069');
gradient.addColorStop(0.4, '#eb571b');
gradient.addColorStop(0.6, '#c0a400');
gradient.addColorStop(1, '#29e131');

// Definir cor de fundo como o gradiente
ctx.fillStyle = gradient;
ctx.fillRect(0, 0, canvas.width, canvas.height);

// Adicionar texto
ctx.fillStyle = '#FFFFFF'; // Cor do texto
ctx.font = '20px Arial'; // Fonte do texto
ctx.fillText('Rifa Digital', 10, 30); // Texto e posição


// Exemplo basico de SweetAlert2
// Criar função com JavaScript
//function alert(){
    // Apresentar a mensagem com SweetAlert
 //   Swal.fire('Sucesso', 'Usuário cadastrado com sucesso!', 'success');
//}

// Chamar a função com JavaScript
//alert();