<!DOCTYPE html>
<!--
@     @ @     @ @@@@@@  @@   @  @@@@
@@   @@ @     @ @       @ @  @ @
  @@@   @     @ @@@@    @  @ @  @@@@ 
   @    @@   @@ @       @   @@      @ 
   @      @@@   @@@@@@@ @    @ @@@@@
                           
                         @
@@@@   @@@@@@  @@   @ @@@@@@  @@@@@@
@   @  @       @ @  @ @       @
@@@@@  @@@@    @  @ @ @@@@    @@@@
@    @ @       @   @@ @       @
@@@@@  @@@@@@@ @    @ @@@@@@@ @@@@@@@
-->
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Netto Tattoo</title>
  <link rel='shortcut icon' href="assets/mdb/img/catrina.png" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="assets/mdb/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/mdb/css/mdb.min.css" rel="stylesheet">
  <link href="assets/mdb/css/style.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <style>
    
    /* Navbar ------------------------------------------------------------------*/
    @import url(https://fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic);
    main {
      z-index: 2;
      position: relative;
      -webkit-transition: transform .7s ease-in-out;
      -moz-transition: transform .7s ease-in-out;
      -ms-transition: transform .7s ease-in-out;
      -o-transition: transform .7s ease-in-out;
      transition: transform .7s ease-in-out;
    }
    .sidebar {
      height: 100%;
      width: 400px;
      position: fixed;
      top: 0;
      z-index: 1;
      right: 0;
      background-color: #212121;
    }
    .bar {
      display: block;
      height: 4px;
      width: 40px;
      background-color: #CC0000;
      margin: 10px auto;
    }
    .button {
      cursor: pointer;
      display: inline-block;
      width: auto;
      margin: 0 auto;
      -webkit-transition: all .7s ease;
      -moz-transition: all .7s ease;
      -ms-transition: all .7s ease;
      -o-transition: all .7s ease;
      transition: all .7s ease;
    }
    .nav-right {
      position: fixed;
      right: 60px;
      top: 6px;
    }
    .nav-right.visible-xs {
      z-index: 3;
    }
    .hidden-xs {
      display: none;
    }
    .middle {
      margin: 0 auto;
    }
    .bar {
      -webkit-transition: all .7s ease;
      -moz-transition: all .7s ease;
      -ms-transition: all .7s ease;
      -o-transition: all .7s ease;
      transition: all .7s ease;
    }
    .nav-right.visible-xs .active .bar {
      background-color: #000000;
      -webkit-transition: all .7s ease;
      -moz-transition: all .7s ease;
      -ms-transition: all .7s ease;
      -o-transition: all .7s ease;
      transition: all .7s ease;
    }
    .button.active .top {
      -webkit-transform: translateY(15px) rotateZ(45deg);
      -moz-transform: translateY(15px) rotateZ(45deg);
      -ms-transform: translateY(15px) rotateZ(45deg);
      -o-transform: translateY(15px) rotateZ(45deg);
      transform: translateY(15px) rotateZ(45deg);
    }
    .button.active .bottom {
      -webkit-transform: translateY(-15px) rotateZ(-45deg);
      -moz-transform: translateY(-15px) rotateZ(-45deg);
      -ms-transform: translateY(-15px) rotateZ(-45deg);
      -o-transform: translateY(-15px) rotateZ(-45deg);
      transform: translateY(-15px) rotateZ(-45deg);
    }
    .button.active .middle {
      width: 0;
    }
    .move-to-left {
      -webkit-transform: translateX(-400px);
      -moz-transform: translateX(-400px);
      -ms-transform: translateX(-400px);
      -o-transform: translateX(-400px);
      transform: translateX(-400px);
    }
    nav {
      padding-top: 30px;
    }
    .sidebar-list {
      padding: 0;
      margin: 0;
      list-style: none;
      position: relative;
      margin-top: 150px;
      text-align: center;
    }
    .sidebar-item {
      margin: 30px 0;
      opacity: 0;
      -webkit-transform: translateY(-20px);
      -moz-transform: translateY(-20px);
      -ms-transform: translateY(-20px);
      -o-transform: translateY(-20px);
      transform: translateY(-20px);
    }
    .sidebar-item:first-child {
      -webkit-transition: all .7s .2s ease-in-out;
      -moz-transition: all .7s .2s ease-in-out;
      -ms-transition: all .7s .2s ease-in-out;
      -o-transition: all .7s .2s ease-in-out;
      transition: all .7s .2s ease-in-out;
    }
    .sidebar-item:nth-child(2) {
      -webkit-transition: all .7s .4s ease-in-out;
      -moz-transition: all .7s .4s ease-in-out;
      -ms-transition: all .7s .4s ease-in-out;
      -o-transition: all .7s .4s ease-in-out;
      transition: all .7s .4s ease-in-out;
    }
    .sidebar-item:nth-child(3) {
      -webkit-transition: all .7s .6s ease-in-out;
      -moz-transition: all .7s .6s ease-in-out;
      -ms-transition: all .7s .6s ease-in-out;
      -o-transition: all .7s .6s ease-in-out;
      transition: all .7s .6s ease-in-out;
    }
    .sidebar-item:last-child {
      -webkit-transition: all .7s .8s ease-in-out;
      -moz-transition: all .7s .8s ease-in-out;
      -ms-transition: all .7s .8s ease-in-out;
      -o-transition: all .7s .8s ease-in-out;
      transition: all .7s .6s ease-in-out;
    }
    .sidebar-item.active {
      opacity: 1;
      -webkit-transform: translateY(0px);
      -moz-transform: translateY(0px);
      -ms-transform: translateY(0px);
      -o-transform: translateY(0px);
      transform: translateY(0px);
    }
    .sidebar-anchor {
      color: #ffffff;
      font-size: 1.8em;
      text-transform: uppercase;
      position: relative;
      padding-bottom: 7px;
    }
    .sidebar-anchor:before {
      color: #000000;
      content: "";
      width: 0;
      height: 2px;
      position: absolute;
      bottom: 0;
      left: 0;
      background-color: #CC0000;
      -webkit-transition: all .7s ease-in-out;
      -moz-transition: all .7s ease-in-out;
      -ms-transition: all .7s ease-in-out;
      -o-transition: all .7s ease-in-out;
      transition: all .7s ease-in-out;
    }
    .sidebar-anchor:hover:before {
      width: 100%;
    }
    .ua {
      position: absolute;
      bottom: 20px;
      left: 30px;
    }
    .fa {
      font-size: 1.4em;
      color: #000000;
      -webkit-transition: all 1s ease;
      -moz-transition: all 1s ease;
      -ms-transition: all 1s ease;
      -o-transition: all 1s ease;
      transition: all 1s ease;
    }
    .ua:hover .fa {
      color: #ffffff;
      -webkit-transform: scale(1.3);
      -moz-transform: scale(1.3);
      -ms-transform: scale(1.3);
      -o-transform: scale(1.3);
      transform: scale(1.3);
      -webkit-transition: all 1s ease;
      -moz-transition: all 1s ease;
      -ms-transition: all 1s ease;
      -o-transition: all 1s ease;
      transition: all 1s ease;
    }
    @media (min-width: 480px) {
      .nav-list {
        display: block;
      }
    }
    @media (min-width: 768px) {
      .nav-right {
        position: absolute;
      }
      .hidden-xs {
        display: block;
      }
      .visible-xs {
        display: none;
      }
    }
    /* Navbar -------------------------------------------------------------------------------*/ 
    /* Google Maps --------------------------------------------------------------------------*/
    .map-container-section {
      overflow:hidden;
      padding-bottom:56.25%;
      position:relative;
      height:0;
    }
    .map-container-section iframe {
      left:0;
      top:0;
      height:100%;
      width:100%;
      position:absolute;
    }
    /* Fim Google Maps --------------------------------------------------------------------------*/
    /* Animação Botão ---------------------------------------------------------------------------*/
    @import url(https://fonts.googleapis.com/css?family=Open+Sans);
    .basicBox, .swiggleBox, .checkBox {
      width: 130px;
      height: 65px;
      margin: 15px auto;
      color: #ffffff;
      font-family: 'Open Sans', sans-serif;
      font-size: 1.00rem;
      line-height: 65px;
      text-transform: uppercase;
      text-align: center;
      position: relative;
      cursor: pointer;
    }
    svg {
      position: absolute;
      top: 0;
      left: 0;
    }
    svg rect, svg path, svg polyline {
      fill: none;
      stroke: #ff0000;
      stroke-width: 5;
    }
    .basicBox:hover svg rect, .swiggleBox:hover svg path, .checkBox:hover svg polyline {
      stroke: #4274D3;
    }
    svg rect {
      stroke-dasharray: 400, 0;
      -webkit-transition: all 0.8s ease-in-out;
      -moz-transition: all 0.8s ease-in-out;
      -ms-transition: all 0.8s ease-in-out;
      -o-transition: all 0.8s ease-in-out;
    }
    .basicBox:hover svg rect {
      stroke-width: 3;
      stroke-dasharray: 35, 245;
      stroke-dashoffset: 38;
      -webkit-transition: all 0.8s ease-in-out;
      -moz-transition: all 0.8s ease-in-out;
      -ms-transition: all 0.8s ease-in-out;
      -o-transition: all 0.8s ease-in-out;
    }
    /* Fim Animação Botão ---------------------------------------------------------------------------*/
    /* Animação Luz Botão ---------------------------------------------------------------------------*/
    .h2p {
      font-family: 'Comic Sans MS';
      color: #fff;
      text-transform: uppercase;
      font-weight: bold;
      font-size: 25px;
      line-height: 0.75;
    }
    .h4p {
      font-family: 'Comic Sans MS';
      color: #fff;
      text-transform: uppercase;
      font-size: 15px;
      line-height: 0.75;
      text-align: right;
    }
    span {
      display: block;
    }
    span:not(.light) {
      opacity: 0;
      animation: flashText 1.0s ease-out alternate infinite;
    }
    span.light {
      position: relative;
      display: inline-block;
    }
    span.light:before {
      position: absolute;
      left: 0;
      top: -10%;
      width: 100%;
      height: 120%;
      background: #fff;
      filter: blur(30px);
      content: "";
      opacity: 0;
      animation: flash 1.0s ease-out alternate infinite;
    }
    @keyframes flash {
      to {
        opacity: 1;
      }
    }
    @keyframes flashText {
      to {
        opacity: 0.15;
      }
    }
    /* Fim Animação Luz Botão ------------------------------------------------------------------------*/
    /* Tela Responsiva -------------------------------------------------------------------------------*/
    .fundoTelaGrande{
      background-size: 100% 100%;
      background-image: url("");
      background-attachment: fixed;
      background-repeat: no-repeat;
    }
    @media screen and (min-width: 800px) {
      .fundoTelaGrande {
        background-image: url("assets/mdb/img/fundot.png");
      }
    }
    .telaPequena{
      display: none;
    }
    @media screen and (max-width: 800px) {
      .telaPequena {
        display: block;
      }
    }
    /* Fim Tela Responsiva ----------------------------------------------------------------------------*/
  </style>
</head>
<body id="body">

