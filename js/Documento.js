window.onload  =function(){
$('.telefone').mask('(00) 0 0000-0000');
$('.valor1').mask('#.##0,00', {reverse: true});
$('.estado').mask('AA');

function calcular() {
  var valor1 = parseInt(document.getElementById("valor1"));
  var qtd1 = parseInt(document.getElementById("qtd1"));
  document.getElementById("total1").innerHTML = valor1 * qtd1;
}

};
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


