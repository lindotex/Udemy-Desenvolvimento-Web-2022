// ECMA 2015 :: Parametros Default

// Função

function contarUmaHistoria(personagem ='Fubá', atividade = 'comer chinelos', nome_dono = 'Jabulani') {
    document.write(`Era uma vez, um cachorro chamado ${personagem}, ele adorava ${atividade}, seu dono era ${nome_dono}, e eles viveram felizes para sempre.`);
}

contarUmaHistoria(undefined,'Enterrar Ossos', 'Jubileu');