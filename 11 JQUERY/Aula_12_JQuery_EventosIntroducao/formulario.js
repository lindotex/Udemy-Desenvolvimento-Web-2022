// jQuery => Form Commands

$(document).focus()     //  Captura o evento da seleção/foco em um parametro html (input, div,...)
$(document).blur()      //  Captura o evento da desseleção/desfocagem em um parametro html (input, div,...)
$(document).change()    //  Captura o evento de modificação de um determinado componente (um select no exemplo abaixo)
$(document).submit()    //  Captura o evento de envio de um formulário


// exemplos:

$('#email').focus((e) => {
    console.log('Este elemento html recebeu "foco" (email).')   // Evento de focagem
    $(e.target).addClass('inputFocado')
})

$('#email').blur((e) => {
    console.log('Este elemento html perdeu "foco" (email).')   // Evento de focagem
    $(e.target).removeClass('inputFocado')
})

$('#opcao').change((e)=>{
    console.log('Opção foi modificada: ' + $(e.target).val())
    // OBS: O valor capturado no "$(e.target).val()" é referente ao valor declarado no "value=''" do 'option' do select atribuido.
    // então, lembre-se de SEMPRE atribuir um "value" ao 'option' do 'select'.
})

$('#form').submit((e)=>{
    e.preventDefault()                      // PREVINE A ATUALIZAÇÂO DA PAGINA!!! MUITO UTILIZADO!
    console.log('formulário enviado.')

})
