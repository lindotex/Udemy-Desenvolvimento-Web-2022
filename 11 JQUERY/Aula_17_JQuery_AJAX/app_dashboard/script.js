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

    // Método AJAX

    $('#competencia').on('change', e =>{

        let competencia = $(e.target).val();
        // console.log(competencia);

        // $.ajax({}) => Espera um objeto literal
        $.ajax({
            // método da requisição (GET ou POST), url, dados (VALORES), sucesso (se der certo), falha (se der errado)
            type: 'GET',
            url:'app.php',
            dataType: 'json',
            data: `competencia=${competencia}`, // formato do 'data' => x-www-form-encoded
            success: dados => {
                $('#numeroVendas').html(dados.numeroVendas)
                $('#totalVendas').html(dados.totalVendas)
                // console.log(dados)

            },
            error: erro => {console.log(erro)},
        })
    })
})
