// Atribuindo Faixa Etaria

var idade = prompt('Digite sua Idade:')

if (idade <= 15) {
    document.write('Crianca')
} else { if(idade <=30){
    document.write('Jovem')    
} else { if(idade <= 60){
    document.write('Adulto')
} else {
    document.write('Idoso')
}}}