@extends('layouts.app')

@section('content')
<!-- Barra do logo -->
<div class="container-md-lojas">
  <nav class="barra-cadastro-loja">
    <p class="painel-cadastro-loja" href="/">Painel<b>Quero</b> 1.0<br><p class="indexlojas">Index de Roupas</p></p>
    <img src = "{{ url('assets/img/logoapp.png') }}" class="logo-cadastro-lojas">
  </div>
</nav>
  
<!-- Menu Retratil -->
<nav class="sidebar-cadastro-loja">
  <div class="text">MENU</div>
  <ul>
     <li><a href="#"><img src = "{{ url('assets/img/icon1.png') }}" class="logo-dashboard">
      <p class="dash-paragrafo">DASHBOARD</p></a><li>
     <li>
       <a href="#" class="feat-btn"><img src = "{{ url('assets/img/icon2.png') }}" class="logo-cadastro">
       <p class="cadastro-paragrafo">CADASTROS</p>
         <span class="fas fa-caret-down first"></span>
       </a>
       <ul class="feat-show">
         <li><a href="#">CIDADES</a></li>
         <li><a href="#">LOJAS</a></li>
         <li><a href="#">CATEGORIAS</a></li>
         <li><a href="#">PRODUTOS</a></li>
       </ul>
     </li>
     <li>
       <a href="#" class="serv-btn"><img src = "{{ url('assets/img/icon3.png') }}" class="logo-gerencia">
          <p class="gerencia-paragrafo">GERENCIAMENTO</p>
       <span class="fas fa-caret-down second"></span>
       </a>
       <ul class="serv-show">
         <li><a href="#">APP Design</a></li>
         <li><a href="#">Web Design</a></li>
       </ul>
     </li>
     <li>
       <a href="#" class="serv-btn"><img src = "{{ url('assets/img/icon4.png') }}" class="logo-financeiro">
          <p class="financeiro-paragrafo">FINANCEIRO</p>
       <span class="fas fa-caret-down second"></span>
       </a>
       <ul class="serv-show">
         <li><a href="#">APP Design</a></li>
         <li><a href="#">Web Design</a></li>
       </ul>
     </li>
     <li>
       <a href="#" class="serv-btn"><img src = "{{ url('assets/img/icon5.png') }}" class="logo-marketing">
            <p class="marketing-paragrafo">MARKETING</p>
       <span class="fas fa-caret-down second"></span>
       </a>
       <ul class="serv-show">
         <li><a href="#">APP Design</a></li>
       </ul>
     </li>
  </ul>
</nav>
<!-- Cadastro Lojas -->
<div class="container-lojas">
<h3 class="text-cadastro-lojas"><b>CADASTRO ></b> CADASTRO DE LOJAS</h3>
<form action="/action_page.php">
  <h5><b>DADOS:</b></h5>
  <label for="fname" style="margin-left: 10px;">NOME DA LOJA:</label>
  <input type="text" id="fname" name="fname" value="" style="margin-left: 10px; width: 350px;">
  <label for="fname" style="margin-left: 150px;">CNPJ DA LOJA:</label>
  <input type="text" id="fname" name="fname" value="" style="margin-left: 10px; width: 350px;"><br><br>
  <label for="lname" style="margin-left: 10px;">RAZÃO SOCIAL:</label>
  <input type="text" id="lname" name="lname" value="" style="margin-left: 10px; width: 350px;"><br><br>

  <h5><b>ENDEREÇO:</b></h5>
  <label for="fname" style="margin-left: 90px;">RUA:</label>
  <input type="text" id="fname" name="fname" value="" style="margin-left: 10px; width: 350px;">
  <label for="fname" style="margin-left: 200px;">NUMERO:</label>
  <input type="text" id="fname" name="fname" value="" style="margin-left: 780px; margin-top: -30px;"><br><br>
  <label for="lname" style="margin-left: 75px;">BAIRRO:</label>
  <input type="text" id="lname" name="lname" value="" style="width: 350px;">
  <label for="lname" style="margin-left: 150px;">COMPLEMENTO:</label>
  <input type="text" id="lname" name="lname" value="" style="margin-left: 780px; width:350px; margin-top: -30px;"><br><br>
  <label for="lname" style="margin-left: 38px;">REFERÊNCIA:</label>
  <input type="text" id="lname" name="lname" value="" style="width: 350px;"><br><br>

  <h5><b>CONTATO:</b></h5>
  <label for="fname" style="margin-left: 50px;">TELEFONE:</label>
  <input type="text" id="fname" name="fname" value="" style="width: 350px;">
  <label for="fname" style="margin-left: 220px;">EMAIL:</label>
  <input type="text" id="fname" name="fname" value="" style="margin-left: 780px; width: 350px; margin-top: -30px;"><br><br>
  <label for="lname" style="margin-left: 50px;">WHATSAPP:</label>
  <input type="text" id="lname" name="lname" value=""><br><br>

  <h5><b>RESPONSAVEL:</b></h5>
  <label for="fname" style="margin-left: 80px;">NOME:</label>
  <input type="text" id="fname" name="fname" value="" style="width: 350px;">
  <label for="fname" style="margin-left: 250px;">RG:</label>
  <input type="text" id="fname" name="fname" value="" style="margin-left: 780px; margin-top: -30px; width:350px;"><br><br>
  <label for="lname" style="margin-left: 80px;">DATA DE NASCIMENTO:</label>
  <input type="date" id="lname" name="lname" value="" style="margin-left: 65px;">
  <label for="lname" style="margin-left: 250px;">CPF:</label>
  <input type="text" id="fname" name="fname" value="" style="margin-left: 780px; width: 350px; margin-top: -30px;"><br><br>

  <h5><b>QUERO SISTEMAS</b></H5>
  <label for="fname" style="margin-left: 80px;">PRIORIDADE:</label>
  <input type="radio" id="fname" name="fname" value=""> 1
  <input type="radio" id="fname" name="fname" value=""> 2
  <input type="radio" id="fname" name="fname" value=""> 3
  <input type="radio" id="fname" name="fname" value=""> 4
  <input type="radio" id="fname" name="fname" value=""> 5
  <input type="radio" id="fname" name="fname" value=""> 6
  <br><br>

  <label for="fname" style="margin-left: 80px;">SERVIÇO CONTRATADO:</label>
  <input type="checkbox" id="fname" name="fname" value="" style="margin-left: 80px;"> QUERO ROUPAS(+5%)<br>
  <input type="checkbox" id="fname" name="fname" value="" style="margin-left: 346px;"> QUERO MARKETING(+5%)<br><br>

  <h5><b>LOGO DA LOJA</b></h5>
  <label for="fname" style="margin-left: 80px;">SELECIONAR:</label>
  <input type="file" id="fname" name="fname" value="">(400px x 400px)<br><br>

  <h5><b>INFORMAÇÕES INTERNAS</b></h5>
  <label for="fname" style="margin-top: -70px; font-size: 14px;">OBSERVAÇÕES:</label>
  <TEXTarea style="margin-top: 40px; width:700px; height:100px;"></TEXTarea><br>
  <input type="submit" id="fname" name="fname" value="CADASTRAR" style="margin-left: 720px;">
  
</form> 
</div>
</body>
</html>
