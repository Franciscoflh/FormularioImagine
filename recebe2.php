<?php

error_reporting(0);
ini_set('display_errors', 0);
require_once __DIR__ . '/vendor/autoload.php';
include 'documento.js';
$data = date('d/m/Y', strtotime($_POST['data']));
$cliente = utf8_encode($_POST['cliente']);
$tipo = utf8_encode($_POST['options']);
$endereco = utf8_encode($_POST['endereco']);
$cnpj = utf8_encode($_POST['cnpj']);
$qtd1 = utf8_encode($_POST['qtd1']);
$desc1 = utf8_encode($_POST['desc1']);
$valor1 = utf8_encode($_POST['valor1']);
$total1 = utf8_encode($_POST['total1']);
$obs = utf8_encode($_POST['obs']);
$qtd2 = utf8_encode($_POST['qtd2']);
$desc2 = utf8_encode($_POST['desc2']);
$valor2 = $_POST['valor2'];
$total2 = utf8_encode($_POST['total2']);
$qtd3 = utf8_encode($_POST['qtd3']);
$desc3 = utf8_encode($_POST['desc3']);
$valor3 = utf8_encode($_POST['valor3']);
$total3 = utf8_encode($_POST['total3']);
$qtd4 = utf8_encode($_POST['qtd4']);
$desc4 = utf8_encode($_POST['desc4']);
$valor4 = utf8_encode($_POST['valor4']);
$total4 = utf8_encode($_POST['total4']);
$qtd5 = utf8_encode($_POST['qtd5']);
$desc5 = utf8_encode($_POST['desc5']);
$valor5 = utf8_encode($_POST['valor5']);
$total5 = utf8_encode($_POST['total5']);
$tipo_servico = utf8_encode($_POST['tipo_servico']);
$nome_admin = utf8_encode($_POST['nome_admin']);
$nacionalidade = utf8_encode($_POST['nacionalidade']);
$rg = utf8_encode($_POST['rg']);
$cpf = utf8_encode($_POST['tipo_servico']);

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<html>
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
        <title>Formulário Orçamento</title>
    </head>
    <body>
         
    <div class="contact container-fluid">
            <h4 style="text-align:center;">Orçamento de Serviço</h4>
            </div>
        <div class="row">
        <p class="boxmodel1 align-content-center">
                            <img src="image/imagine.jpg" style="width: 20%; margin-top: 35px; float:left;margin-right: 20px;margin-left: 10px;">
                            Empresa Imagine Decorações<br/>
                            Rua Dez, Casa 07, Bequimão<br/>
                            CNPJ: 07.781.756/0001-64<br/>
                            CEP: 65061-600 São Luís, Maranhão<br/>
                            Fone: (98)98701-0656/ (98)98413-6886 
                        </p>
         
         
        <p style="text-align:center;">
          <label>Data:' . $data . '</label>
              </p>
        </div>
        <p style="text-align:center;">
            <label style="">Cliente:' . utf8_decode($cliente) . '</label>
         </p>
         
         <p style="text-align:center;">
         <label>Endereço:' . utf8_decode($endereco) . '</label>
             </p>
         <p style="text-align:center;">
         <label>CNPJ/CPF/RG:' . $cnpj . '</label>
          </p>
          
             </div>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Qtde.</th>
      <th scope="col">Descrição do produto</th>
      <th scope="col">Valor Unitário</th>
      <th scope="col">Valor Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <th scope="row">' . $qtd1 . '</th>
      <td>' . utf8_decode($desc1) . '</td>
      <td>R$' . $valor1 . '</td>
      <td>R$' . $total1 . '</td>
    </tr>
    <tr>
        <th scope="row">' . $qtd2 . '</th>
      <td> ' . utf8_decode($desc2) . '</td>
      <td> ' . $valor2 . '</td>
      <td> ' . $total2 . '</td>
    </tr>
    <tr>
        <th scope="row">' . $qtd3 . '</th>
      <td> ' . utf8_decode($desc3) . '</td>
      <td> ' . $valor3 . '</td>
      <td> ' . $total3 . '</td>
    </tr>
    <tr>
        <th scope="row">' . utf8_decode($qtd4) . '</th>
      <td> ' . utf8_decode($desc4) . '</td>
      <td> ' . $valor4 . '</td>
      <td> ' . $total4 . '</td>
    </tr>
    <tr>
        <th scope="row">' . utf8_decode($qtd5) . '</th>
      <td> ' . utf8_decode($desc5) . '</td>
      <td> ' . $valor5 . '</td>
      <td> ' . $total5 . '</td>
    </tr>
    </tbody>
    </table>
           <p style="text-align:center;"> 
          <label>Observações: <br/>' . utf8_decode($obs) . '</label>
          </p>
          
          
    <h4 style="text-align:center">Contrato</h4>
          <p style="font-weight:bold">
        CONTRATANTE</p><p>' . utf8_decode($cliente) . '
        com sede na cidade de São Luís, 
        inscrita no C.N.P.J. sob o nº ' . $cnpj . '
        que explora o ramo de ' . utf8_decode($tipo_servico) . '.</p>
<p style="font-weight:bold;">        
CONTRATADO</p> Empresa Imagine Decorações, com sede na cidade de São Luís, na Rua Dez, nº 07, bairro Bequimão, Cep 65061-600, no Estado Maranhão, inscrita no C.N.P.J. sob o nº 07.781.756/0001-64,que explora o ramo de fabricação de estofados.
  
</p>
          
        
            <hr style="width:40%"/>
            <p style="text-align:center">
            (Assinatura do Contratante)
            </p>
           
        
            <hr style="width:40%"/>
            <p style="text-align:center">
            (Assinatura do Contratado)
</p>
  
        </body>
        </html>');
//$mpdf->AddPage();
//$mpdf->WriteHTML();
ob_clean();
$mpdf->Output();

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

