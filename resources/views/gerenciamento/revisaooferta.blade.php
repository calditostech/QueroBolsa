@extends('layouts.app')

@section('content')
<!-- Barra do logo -->
  <div class="container-gerencia-revisao">
  <nav class="barra-gerencia-revisao">
    <p class="painel-gerencia-revisao" href="/">Painel<b>Quero</b> 1.0<br><p class="indexrop">Index de Roupas</p></p>
    <img src = "{{ url('assets/img/logoapp.png') }}" class="logo-cidades">
  </div>
</nav>

<!-- Menu Retratil -->
<nav class="sidebar-gerencia-revisao">
  <ul>
     <li><a href="http://localhost/QueroBolsa/public/"><img src = "{{ url('assets/img/icon1.png') }}" class="logo-dashboard">
      <p class="dash-paragrafo">DASHBOARD</p></a><li>
     <li>
       <a href="#" class="feat-btn"><img src = "{{ url('assets/img/icon2.png') }}" class="logo-cadastro">
       <p class="cadastro-paragrafo">CADASTROS</p>
         <span class="fas fa-caret-down first"></span>
       </a>
       <ul class="feat-show">
         <li><a href="http://localhost/QueroBolsa/public/cadastros/cidades">CIDADES</a></li>
         <li><a href="http://localhost/QueroBolsa/public/cadastros/lojas">LOJAS</a></li>
         <li><a href="http://localhost/QueroBolsa/public/cadastros/categorias">CATEGORIAS</a></li>
         <li><a href="http://localhost/QueroBolsa/public/cadastros/produtos">PRODUTOS</a></li>
       </ul>
     </li>
     <li>
       <a href="#" class="serv-btn"><img src = "{{ url('assets/img/icon3.png') }}" class="logo-gerencia">
          <p class="gerencia-paragrafo">GERENCIAMENTO</p>
       <span class="fas fa-caret-down second"></span>
       </a>
       <ul class="serv-show">
       <li><a href="http://localhost/QueroBolsa/public/gerenciamento/cidades">CIDADES</a></li>
         <li><a href="http://localhost/QueroBolsa/public/gerenciamento/lojas">LOJAS</a></li>
         <li><a href="http://localhost/QueroBolsa/public/gerenciamento/categorias">CATEGORIAS</a></li>
         <li><a href="http://localhost/QueroBolsa/public/gerenciamento/produtos">PRODUTOS</a></li>
         <li><a href="http://localhost/QueroBolsa/public/gerenciamento/usuarios">USUARIOS</a></li>
         <li><a href="http://localhost/QueroBolsa/public/gerenciamento/revisaoofertas">REVISÃODEOFERTAS</a></li>
         <li><a href="http://localhost/QueroBolsa/public/gerenciamento/funcaoadm">FUNÇÃOADM</a></li>
         <li><a href="http://localhost/QueroBolsa/public/gerenciamento/configuracao">CONFIGURAÇÕES</a></li>
       </ul>
     </li>
     <li>
       <a href="#" class="finan-btn"><img src = "{{ url('assets/img/icon4.png') }}" class="logo-financeiro">
          <p class="financeiro-paragrafo">FINANCEIRO</p>
       <span class="fas fa-caret-down second"></span>
       </a>
       <ul class="finan-show">
         <li><a href="http://localhost/QueroBolsa/public/financeiro/cidades">CIDADES</a></li>
         <li><a href="http://localhost/QueroBolsa/public/financeiro/lojas">LOJAS</a></li>
       </ul>
     </li>
     <li>
       <a href="#" class="mkt-btn"><img src = "{{ url('assets/img/icon5.png') }}" class="logo-marketing">
            <p class="marketing-paragrafo">MARKETING</p>
       <span class="fas fa-caret-down second"></span>
       </a>
       <ul class="mkt-show">
          <li><a href="http://localhost/QueroBolsa/public/marketing/pushs">PUSHS</a></li>
       </ul>
     </li>
  </ul>
</nav>

<div class="row"  style="width: 1200px; margin-top: 150px;">
  <div class="column" style="background-color:white; height: 300px; width: 1380px; margin-top:-20px;">
    <h2 style="font-size:18px;">EDITAR<b> > PRODUTOS</b></h2>
    <table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">CATEGORIAS</th>
      <th scope="col" style="margin-top:5px;">MEDIDA</th>
      <th scope="col">EDITAR</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">CAMISETA</th>
      <td>M</td>
      <td><button type="button" class="btn btn-success">EDITAR</button></td>
    </tr>
    <tr>
      <th scope="row">TENIS</th>
      <td>40</td>
      <td><button type="button" class="btn btn-success">EDITAR</button></td>
    </tr>
    <tr>
    </tr>
  </tbody>
</table>
  </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
// função do menu modulo cadastro
$(document).ready(function(){
  $(".feat-btn").click(function(){
    $(".feat-show").hide(1000);
  });
   $(".feat-btn").click(function(){
    $(".feat-show").show();
  });
  $(".feat-btn").click(function(){
    $(".feat-show").css("height", "150px");
  });
  $(".feat-btn").click(function(){
    $(".feat-show").css("font-size", "12px");
  });
  $(".feat-btn").click(function(){
    $(".feat-show").css("padding", "2px");
  });
});

// função do menu modulo gerenciamento
$(document).ready(function(){
  $(".serv-btn").click(function(){
    $(".serv-show").hide(1000);
  });
   $(".serv-btn").click(function(){
    $(".serv-show").show();
  });
  $(".serv-btn").click(function(){
    $(".serv-show").css("height", "300px");
  });
  $(".serv-btn").click(function(){
    $(".serv-show").css("font-size", "12px");
  });
  $(".serv-btn").click(function(){
    $(".serv-show").css("padding", "2px");
  });
});
// função do menu modulo financeiro
$(document).ready(function(){
  $(".finan-btn").click(function(){
    $(".finan-show").hide(1000);
  });
   $(".finan-btn").click(function(){
    $(".finan-show").show();
  });
});

// função do menu modulo marketing
$(document).ready(function(){
  $(".mkt-btn").click(function(){
    $(".mkt-show").hide(1000);
  });
   $(".mkt-btn").click(function(){
    $(".mkt-show").show();
  });
});
</script>
