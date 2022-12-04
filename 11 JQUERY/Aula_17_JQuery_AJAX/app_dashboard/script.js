$(document).ready(() => {
	$('#documentacao').on('click', ()=>{
        console.log('Link Documentação Clicado!');

        // carregando a pagina utilizando o método 'load()'
        // $('#pagina').load('documentacao.html');

        // carregando a pagina utilizando o método 'get()'
        // $.get('documentacao.html', data => {
        //     $('#pagina').html(data)
        // });

        // carregando a pagina utilizando o método 'post()'
        $.post('documentacao.html', data => {
            $('#pagina').html(data)
        });

    })
	$('#suporte').on('click', ()=>{
        console.log('Link Suporte Clicado!');

        // carregando a pagina utilizando o método 'load()'
        // $('#pagina').load('suporte.html');

        // carregando a pagina utilizando o método 'get()'
        // $.get('suporte.html', data => {
        //     $('#pagina').html(data)
        // });

        // carregando a pagina utilizando o método 'post()'
        $.post('suporte.html', data => {
            $('#pagina').html(data)
        });
    })
})
