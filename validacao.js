// Espera pra ativar o código quando o documento
// inteiro terminar de ser carregado
$(document).ready( function(){

    // Quanto o "formulario" for enviado...
    $("#formulario").submit(function(event){

        // para cada campo obrigatório...
        $(".obrigatorio").each(function(){

            // Armazena o valor do campo
            var valor = $(this).val();
            // Se o valor for igual a vazio
            if(valor == ""){
                // Coloca uma mensagem no span
                $(this).next("span").text("Campo obrigatório");

                // Para o envio do formulário
                event.preventDefault();

            }

        }); // fim do each

    }); // fim do submit

} ); // fim do ready

/*
importar validacao depois Jquey
Colocar o formulario com id formulario
Colocar o campo com a classe obrigatorio
Na frente do campo tem que ter um span
*/
