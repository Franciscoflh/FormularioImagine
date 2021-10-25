

<!DOCTYPE html>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">

        <!-- Última versão CSS compilada e minificada -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Tema opcional -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Última versão JavaScript compilada e minificada -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="js/documento.js"></script>
        <title>Formulário Orçamento</title>
    </head>
    <body>

        <!-- <div >
             <form class="col-md-6 legend">
                 <div class="container">
                     <fieldset>  <legend class="legend">Orçamento de Serviço</legend>
 
                         <label for="data">Data: </label><input type="date" name="data">
                         <label for="data">Cliente: </label><input type="text" name="cliente">
                         <label for="data">Endereço: </label><input type="text" name="endereço">
                         <label for="data">CNPJ: </label><input type="text" name="cnpj">
 
 
                         <h4>Segue orçamento para análise:</h4>
                         <div class="table-responsive-sm table-responsive-lg table-responsive-md">
                             <table class="table table-striped table-bordered table-hover">
                                 <thead>
                                     <tr>
                                         <th>Qtde.</th>
                                         <th>Descrição dos itens</th>
                                         <th>Valor Unitário</th>
                                         <th>Valor Total</th>
 
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr>
                                         <th><input type="text" name="qtd1"/></th>
                                         <td><input type="text" name="prod1"/></td>
                                         <td><input type="text" name="valor_unit1"/></td>
                                         <td><input type="text" name="valor_total1"/></td>
 
                                     </tr>
 
                                 </tbody>
                             </table>
                         </div>
                 </div>
                 <label for="obs">Observações: </label><textarea class="form-control texta"  name="obs"></textarea>
 
                 </fieldset>
             </form>
         </div>-->
        <?php
        // put your code here
        ?>
        <div class="contact">
            <h3 class="">Orçamento de Serviço</h3>
            <p class="adicionar" id="add_item" >
                Adicionar Item
                <i class="fas fa-plus"></i>
            </p>

            <form action="recebe2.php " method="post" enctype="multipart/form-data">
                <p>
                    <label>Data:</label>
                    <input type="date" name="data">
                </p>
                <p>
                    <label>Cliente</label>
                    <input type="text" name="cliente">
                </p>
                <p>
                    <label>Endereço</label>
                    <input type="text" name="endereco">
                </p>
                <!--<p>
                    <label class="custom-select">
                        <select  name='options'onchange="add_juridica">
                            <option value="tipo">Selecione o tipo de pessoa</option>
                            <option value="fisica" >Pessoa Física</option>
                            <option value="juridica" >Pessoa Jurídica</option>
                        </select>
                    </label>
                    <div id="juridica">

                </div>
                </p> --> 
                   <p>
                    <label>CNPJ/CPF:</label><input type="text" id="cnpj" name="cnpj"> 
                </p>
                <p>
                    <label>Descrição do Produto</label><input type="text" name="desc1">  
                </p>
                <p>
                    <label>Qtde.</label><input type="number" id="qtd1" name="qtd1" > 
                </p>
                <p>
                    <label for="valor1">Valor Unitário</label><input type="text" id="valor1" name="valor1"  onkeyup="formatarMoeda()">
                </p>
                <p>
                    <label>Valor Total</label><input type="text" name="total1" id="total1"  onkeyup="formatarMoeda()">
                </p>

                <div id="profissional">

                </div>
                <p class="full">
                    <label>Observações</label>
                    <textarea name="obs" rows="5"></textarea>
                </p>
                <h3>Contrato</h3>
                <p>
                    <label>Tipo de serviço do contratante:</label><input type="text" id="tipo_servico" name="tipo_servico" > 
                </p>
               
                
                <p class="full">
                    <button type="submit" onclick="alerta()">Enviar</button>
                </p>
                
            </form>
        </div>
        <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
        <script>
                         var perfil = document.getElementById("profissional");
                        var contador = 2;
                        var juridica=document.getElementById("juridica");
                        
                        
                        function formatarMoeda() {
                            var elemento2 = document.getElementById('total1');
                            var elemento = document.getElementById('valor1');
                            var elemento3 = document.getElementById('total2');
                            var elemento4 = document.getElementById('valor2');
                            var elemento5 = document.getElementById('total3');
                            var elemento6 = document.getElementById('valor3');
                            var elemento7 = document.getElementById('total4');
                            var elemento8 = document.getElementById('valor4');
                            var elemento9 = document.getElementById('total5');
                            var elemento10 = document.getElementById('valor5');
                            var total1 = elemento2.value;
                            var valor1 = elemento.value;
                            var total2 = elemento3.value;
                            var valor2 = elemento4.value;
                            var total3 = elemento5.value;
                            var valor3 = elemento6.value;
                            var total4 = elemento7.value;
                            var valor4 = elemento8.value;
                            var total5 = elemento9.value;
                            var valor5 = elemento10.value;

                            valor1 = valor1 + '';
                            valor1 = parseInt(valor1.replace(/[\D]+/g, ''));
                            valor1 = valor1 + '';
                            valor1 = valor1.replace(/([0-9]{2})$/g, ",$1");

                            if (valor1.length > 6) {
                                valor1 = valor1.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
                            }

                            elemento.value = valor1;
                            //fim valor1 
                             
                            
                            total1 = total1 + '';
                            total1 = parseInt(total1.replace(/[\D]+/g, ''));
                            total1 = total1 + '';
                            total1 = total1.replace(/([0-9]{2})$/g, ",$1");

                            if (total1.length > 6) {
                                total1 = total1.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
                            }
                            elemento2.value = total1;
                            //fim total1 
                            
                            valor2 = valor2 + '';
                            valor2 = parseInt(valor1.replace(/[\D]+/g, ''));
                            valor2 = valor2 + '';
                            valor2 = valor2.replace(/([0-9]{2})$/g, ",$1");

                            if (valor2.length > 6) {
                                valor2 = valor2.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
                            }

                            elemento3.value = valor2;
                            //fim valor2 
                             
                            
                            total2 = total2 + '';
                            total2 = parseInt(total2.replace(/[\D]+/g, ''));
                            total2 = total2 + '';
                            total2 = total2.replace(/([0-9]{2})$/g, ",$1");

                            if (total2.length > 6) {
                                total2 = total2.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
                            }
                            elemento4.value = total2;
                            //fim total2
                            
                            valor3 = valor3 + '';
                            valor3 = parseInt(valor3.replace(/[\D]+/g, ''));
                            valor3 = valor3 + '';
                            valor3 = valor3.replace(/([0-9]{2})$/g, ",$1");

                            if (valor3.length > 6) {
                                valor3 = valor3.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
                            }

                            elemento5.value = valor3;
                            //fim valor3 
                             
                            
                            total3 = total3 + '';
                            total3 = parseInt(total3.replace(/[\D]+/g, ''));
                            total3 = total3 + '';
                            total3 = total3.replace(/([0-9]{2})$/g, ",$1");

                            if (total3.length > 6) {
                                total3 = total3.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
                            }
                            elemento6.value = total3;
                            //fim total3
                       
                            valor4 = valor4 + '';
                            valor4 = parseInt(valor4.replace(/[\D]+/g, ''));
                            valor4 = valor4 + '';
                            valor4 = valor4.replace(/([0-9]{2})$/g, ",$1");

                            if (valor4.length > 6) {
                                valor4 = valor4.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
                            }

                            elemento7.value = valor4;
                            //fim valor4 
                             
                            
                            total4 = total4 + '';
                            total4 = parseInt(total4.replace(/[\D]+/g, ''));
                            total4 = total4 + '';
                            total4 = total4.replace(/([0-9]{2})$/g, ",$1");

                            if (total4.length > 6) {
                                total4 = total4.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
                            }
                            elemento8.value = total4;
                            //fim total4
                            
                            valor5 = valor5 + '';
                            valor5 = parseInt(valor5.replace(/[\D]+/g, ''));
                            valor5 = valor5 + '';
                            valor5 = valor5.replace(/([0-9]{2})$/g, ",$1");

                            if (valor5.length > 6) {
                                valor5 = valor5.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
                            }

                            elemento9.value = valor5;
                            //fim valor5 
                             
                            
                            total5 = total5 + '';
                            total5 = parseInt(total5.replace(/[\D]+/g, ''));
                            total5 = total5 + '';
                            total5 = total5.replace(/([0-9]{2})$/g, ",$1");

                            if (total5.length > 6) {
                                total5 = total5.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
                            }
                            elemento10.value = total5;
                            //fim total5
    
                        
    
                        }
                        ;

                        
                           
                        
                        

                            
                        add_item.onclick = function () {

                            if (contador <= 5) {
                                var bloco = 
                                            '<div class="contact">' +
                                            '<br/> <hr/>'+
                                        '<p>' +
                                        '<label>Descrição do Produto</label><input type="text" name="desc' + contador + '">' +
                                        '</p>' +
                                        '<p>' +
                                        '<label>Qtde.</label><input type="number" id="qtd' + contador + '" name="qtd' + contador + '" > ' +
                                        '</p>' +
                                        '<p>' +
                                        '<label>Valor Unitário</label><input type="number" id="valor' + contador + '"  name="valor' + contador + '"  onkeyup="formatarMoeda()">' +
                                        '</p>' +
                                        '<p>' +
                                        '<label>Valor Total</label><input type="text" name="total' + contador + '" id="total' + contador + '" onkeyup="formatarMoeda()">' +
                                        '</p>'+
                                        '<div/>';
                                perfil.insertAdjacentHTML("beforeEnd", bloco);
                                contador++;
                            }

                        };
                        
                        
    
        </script>
    </body>




</html>


