@extends('layouts.app')

@section('content')
<!-- Barra do logo -->
<div class="container-md-lojas-gerencia">
  <nav class="barra-gerencia-loja">
    <p class="painel-gerencia-loja" href="/">Painel<b>Quero</b> 1.0<br><p class="indexlojas">Index de Roupas</p></p>
    <img src = "{{ url('assets/img/logoapp.png') }}" class="logo-gerencia-lojas">
  </div>
</nav>
  
<!-- Menu Retratil -->
<nav class="sidebar-gerencia-loja">
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

<!-- gerencimento de lojas -->

<div class="container-lojas-gerencia">
<h3 class="text-gerencia-lojas"><b>GERENCIMENTO ></b> LOJAS</h3>

<label for="cars">FILTRAR POR :</label>

<select name="cars" id="cars">
  <option value="volvo">CARAZINHO</option>
  <option value="saab">SARANDI</option>
  <option value="mercedes">ERECHIM</option>
  <option value="audi">IJUI</option>
  <option value="audi">PANAMBI</option>
  <option value="audi">SOLEDADE</option>
</select>

<label style="margin-left: 20px;">PESQUISAR :</label>
<input type="text" id="fname" name="fname" value="" style="margin-left: 10px; width: 350px;" />
<button id="btnBusca">Buscar</button>

<table style="width:100%; margin-top:20px; border: solid 2px;">
  <tr colspan="6" style="background-color:#FFD700;">
    <th>NOME DA LOJA</th>
    <th>CIDADE</th>
    <th>DATA DO CADASTRO</th>
    <th>TOTAL EM VENDAS</th>
    <th>CIDADE</th>
    <th></th>
  </tr>
  <tr style="background-color:white;">
    <td>LOJA</td>
    <td>CARAZINHO</td>
    <td>05/10/1990</td>
    <td>3.500.962,32</td>
    <td>ATIVO(desativar)</td>
    <td>ver cadastro</td>
  </tr>
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".feat-btn").click(function(){
    $(".feat-show").hide(1000);
  });
   $(".feat-btn").click(function(){
    $(".feat-show").show();
  });
});
</script>
