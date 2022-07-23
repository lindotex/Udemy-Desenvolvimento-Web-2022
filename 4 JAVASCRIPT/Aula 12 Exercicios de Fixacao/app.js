var nome = prompt('Digite seu Nome:')
var altura = prompt('Digite Sua altura em centimetros:')
var peso = prompt('Digite Seu Peso em Kilos:')

parseFloat(altura)
parseFloat(peso)

alturaMetros = altura /100

var imc = (peso / (alturaMetros^2))

document.write('<h2>Seu nome: ' + nome + '</h2>')
document.write('<h2>Sua Altura: ' + alturaMetros + 'm</h2>')
document.write('<h2>Seu Peso: ' + peso + 'Kg</h2>')
document.write('<h2>Seu IMC: ' + imc + '</h2>')

if(imc < 16){
    classificacao = 'Baixo peso muito grave';
   
   } else if(imc >= 16 && imc <= 16.99){
    classificacao = 'Baixo peso grave';
   
   } else if(imc >= 17 && imc <= 18.49){
    classificacao = 'Baixo peso';
   
   } else if(imc >= 18.50 && imc <= 24.99){
    classificacao = 'Peso normal';
   
   } else if(imc >= 25 && imc <= 29.99){
    classificacao = 'Sobrepeso';
   
   } else if(imc >= 30 && imc <= 34.99){
    classificacao = 'Obesidade grau I';

    } else if(imc >= 35 && imc <= 39.99){
    classificacao = 'Obesidade grau II';

    } else { //se não estiver enquadrado em nenhum critério acima, imc só pode ser maior que 40
    classificacao = 'Obesidade grau III';
    } 
 
                            
document.write('<h2>Classificacao ' + classificacao + '</h2>')