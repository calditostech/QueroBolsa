@extends('layouts.app')

@section('content')
<!-- Barra do logo -->
<nav class="barra-logo">
  <div class="container-md">
    <p class="painel-texto" href="/">Painel<b>Quero</b> 1.0<br><p class="indexrop">Index de Roupas</p></p>
    <img src = "{{ url('assets/img/logoapp.png') }}" class="logo-home">
  </div>
</nav> 

<!--menu retratil -->
<!--<div id="lateral">
<div id="menu">
  			
<h3 class="link-titulo">CADASTROS</h3>
  <ul class="box">					
    <li><a href="#">CIDADES</a></li>
    <li><a href="#">LOJAS</a></li>
    <li ><a href="#">CATEGORIAS</a></li>
    <li ><a href="#">PRODUTOS</a></li>
  </ul>

<h3 class="link-titulo">GERENCIAMENTO</h3>
  <ul class="box">
  <li><a href="#">CIDADES</a></li>
    <li><a href="#">LOJAS</a></li>
    <li ><a href="#">CATEGORIAS</a></li>
    <li ><a href="#">PRODUTOS</a></li>
    <li ><a href="#">USUARIOS</a></li>
  </ul>

<h3 class="link-titulo">FINANCEIRO</h3>
  <ul class="box">					
    <li><a href="#">RELATORIOS</a></li> 			
    <li><a href="#">COBRANÇAS</a></li> 			
  </ul>

<h3 class="link-titulo">MARKETING</h3>
  <ul class="box">
    <li><a href="#">PUSHS</a></li>
  </ul> -->
    
<!-- mais seções --> 

<!--</div>--> <!-- /#menu -->
<!--</div id="link"> --><!-- vazio --><!-- <div>
</div>--> <!-- /#lateral -->

<nav class="menu-hidde" id="menu-hidde">
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" id="titulo-dash" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">DASHBOARD</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">HOME</a></li>
    </ul>
  </li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" id="titulo-cadastro" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">CADASTROS</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">CIDADES</a></li>
      <li><a class="dropdown-item" href="#">LOJAS</a></li>
      <li><a class="dropdown-item" href="#">CATEGORIAS</a></li>
      <li><a class="dropdown-item" href="#">PRODUTOS</a></li>
    </ul>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" id="titulo-gerencia" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">GERENCIAMENTO</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">CIDADES</a></li>
      <li><a class="dropdown-item" href="#">LOJAS</a></li>
      <li><a class="dropdown-item" href="#">CATEGORIAS</a></li>
      <li><a class="dropdown-item" href="#">PRODUTOS</a></li>
      <li><a class="dropdown-item" href="#">USUARIOS</a></li>
    </ul>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" id="titulo-financeiro" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">FINANCEIRO</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">RELATORIO</a></li>
      <li><a class="dropdown-item" href="#">COBRANÇAS</a></li>
    </ul>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" id="titulo-mkt" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">MARKETING</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">PUSHS</a></li>
    </ul>
  </li>
</nav>