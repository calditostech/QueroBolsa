@extends('layouts.app')

@section('content')
<!-- Barra do logo -->
  <div class="container-md">
  <nav class="barra-logo">
    <p class="painel-texto" href="/">Painel<b>Quero</b> 1.0<br><p class="indexrop">Index de Roupas</p></p>
    <img src = "{{ url('assets/img/logoapp.png') }}" class="logo-home">
  </div>
</nav>

<!-- Menu Retratil -->
<nav class="sidebar">
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
         <li><a href="#">Pages</a></li>
         <li><a href="#">Elements</a></li>
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

<!-- DASHBOARD -->
<div class="row"style="margin-top: 20px; margin-top: 100px;">
  <div class="column" style="background-color:white;">
    <div class="box-blue" style="height: 100px; width: 140px; background-color: #1E90FF; margin-top: -30px; margin-left: -30px;">
    <img src = "{{ url('assets/img/icone users dashboard.png') }}" class="logo-users">
    </div>
    <h2 class="newuser"><b>NOVOS USUARIOS</b></h2>
    <p class="valorusuarios"><b>1350</b></p>
  </div>
  <div class="column" style="background-color:white; margin-left:400px; margin-top:-100px; ">
     <div class="box-red" style="height: 100px; width: 140px; background-color: #FF0000; margin-top: -30px; margin-left: -30px;">
     <img src = "{{ url('assets/img/icone sales dashboard.png') }}" class="logo-cart">
     </div>
    <h2 class="oferta"><b>OFERTAS VENDIDAS</b></h2>
    <p class="valorofertas"><b>58</b></p>
  </div>
  <div class="column" style="background-color:white; margin-left:800px; margin-top:-100px;">
    <div class="box-green"style="height: 100px; width: 140px; background-color: #008B00; margin-top: -30px; margin-left: -30px;">
    <img src = "{{ url('assets/img/cart icon dashboard.png') }}" class="logo-sales"> 
    </div>
    <h2 class="totalvendas"><b>TOTAL EM VENDAS</b></h2>
    <p class="valortotal"><b>R$1.740,92</b></p>
  </div>
</div>

<!-- VENDAS POR CIDADE -->
<div class="row" style="width: 1200px; margin-top: 50px;">
  <div class="column" style="background-color:white; height: 300px; width: 780px;">
    <h2 style="font-size:20px"><b>VENDAS</b> POR CIDADE</h2>
    <div class="acoes" style="margin-left: 400px; margin-top:-40px; padding:10px;">
       <ion-icon name="remove-outline"></ion-icon>
       <ion-icon name="add-outline"></ion-icon>
       <div class="bloco-verde" style="height: 300px; width: 200px; background-color: #008B00; margin-left: 140px; margin-top:-55px; color:white; font-size: 12px;">
          <li>VISITAS NO APP</li>
          <br>
          <li>NOVOS MEMBROS HOJE</li>
          <br>
          <li>DOWNLOAD DO APP</li>
          <br>
       </div>
       <div class="listavenda">
       <ul class="venda">
          <li>CARAZINHO</li>
             <li>SARANDI</li>
         <li>ERECHIM</li>
         <li>IJUI</li>
         <li>PANAMBI</li>
         <li>SOLEDADE</li>
      </ul>
     </div>
    </div>
  </div>
  <div class="column" style="background-color:white; height: 300px; width: 380px; margin-left:800px; margin-top:-300px;">
    <h2 style="font-size:20px"><b>TOP 3 LOJAS</b></h2>
  </div>
</div>

<!-- TABELA DE VENDAS -->

<div class="row"  style="width: 1200px; margin-top: 50px;">
  <div class="column" style="background-color:white; height: 300px; width: 1380px; margin-top:-20px;">
    <h2 style="font-size:20px;">ULTIMAS <b>OFERTAS VENDIDAS</b></h2>
    <table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">ID DO PEDIDO</th>
      <th scope="col">OFERTA</th>
      <th scope="col">LOJA</th>
      <th scope="col">STATUS</th>
      <th scope="col">VALOR</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">#1445</th>
      <td>TENIS NIKE</td>
      <td>LOJA DO POVO</td>
      <td style="color:green;">CONCLUIDO</td>
      <td>198.78</td>
      <td style="color:red;">VER PEDIDO</td>
    </tr>
    <tr>
    <th scope="row">#2845</th>
      <td>ROUPAS LACOSTE</td>
      <td>LOJA DO POVO</td>
      <td style="color:green;">CONCLUIDO</td>
      <td>205.89</td>
      <td style="color:red;">VER PEDIDO</td>
    </tr>
    <tr>
    <th scope="row">#3475</th>
      <td>TENIS MIZUNO</td>
      <td>LOJA DO POVO</td>
      <td style="color:green;">CONCLUIDO</td>
      <td>305.78</td>
      <td style="color:red;">VER PEDIDO</td>
    </tr>
  </tbody>
</table>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
