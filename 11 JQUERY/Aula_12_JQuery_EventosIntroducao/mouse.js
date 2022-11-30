// jQuery => Mouse Commands

$(document).mousedown()     // No Ato de apertar para baixo o botão principal do mouse
$(document).mouseup()       // No Ato de soltar para cima o botão principal do mouse
$(document).click()         // Ato completo de apertar e soltar o botão principal do mouse
$(document).dbclick()       // Ato completo de apertar e soltar o botão principal do mouse rapidamente duas vezes
$(document).mousemove()     // Ato de mover o mouse sobre o espaço selecionado

$(document).mouseenter()    // Evento disparado quando o mouse entra sobre o objeto selecionado
$(document).mouseleave()    // Evento disparado quando o mouse sai sobre o objeto selecionado
$(document).mouseover()     // Evento disparado quando o mouse entra sobre o objeto selecionado
$(document).mouseout()      // Evento disparado quando o mouse sai sobre o objeto selecionado


// mouse enter != mouse over
// mouse leave != mouse out

/*
    Mouseover e Mouseout são mais antigos.
    Moouseenter e Mouseleave são mais recentes no ESJ

    CUIDADO COM O EFEITO BUBBLE DE SOBREPOSIÇÃO!

    Preferencialmente utilizar mouseenter() e mouseleave()

*/
