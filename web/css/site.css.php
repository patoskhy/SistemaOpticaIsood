<?php
header('content-type:text/css');

$est = parse_ini_file("site-estilos.ini");

$colorPrincipal = $est["color.principal"];
$colorSecundario = $est["color.secundario"];


echo <<<FINCSS

html,
body {
    height: 100%;
}

.bodyLogin {
    background-color: #ecf0f5;
}

.wrap {
    min-height: 100%;
    height: auto;
    margin: 0 auto -60px;
    padding: 0 0 60px;
}

.wrap>.container {
    padding: 70px 15px 20px;
}

.footer {
    height: 60px;
    background-color: #f5f5f5;
    border-top: 1px solid #ddd;
    padding-top: 20px;
}

.jumbotron {
    text-align: center;
    background-color: transparent;
}

.jumbotron .btn {
    font-size: 21px;
    padding: 14px 24px;
}

.not-set {
    color: #c55;
    font-style: italic;
}


/* add sorting icons to gridview sort links */

a.asc:after,
a.desc:after {
    position: relative;
    top: 1px;
    display: inline-block;
    font-family: 'Glyphicons Halflings';
    font-style: normal;
    font-weight: normal;
    line-height: 1;
    padding-left: 5px;
}

a.asc:after {
    content: /*"\e113"*/
    "\e151";
}

a.desc:after {
    content: /*"\e114"*/
    "\e152";
}

.sort-numerical a.asc:after {
    content: "\e153";
}

.sort-numerical a.desc:after {
    content: "\e154";
}

.sort-ordinal a.asc:after {
    content: "\e155";
}

.sort-ordinal a.desc:after {
    content: "\e156";
}

.grid-view th {
    white-space: nowrap;
}

.hint-block {
    display: block;
    margin-top: 5px;
    color: #999;
}

.error-summary {
    color: #a94442;
    background: #fdf7f7;
    border-left: 3px solid #eed3d7;
    padding: 10px 20px;
    margin: 0 0 15px 0;
}


/* align the logout "link" (button in form) of the navbar */

.nav li>form>button.logout {
    padding: 15px;
    border: none;
}

@media(max-width:767px) {
    .nav li>form>button.logout {
        display: block;
        text-align: left;
        width: 100%;
        padding: 10px 15px;
    }
}

.nav>li>form>button.logout:focus,
.nav>li>form>button.logout:hover {
    text-decoration: none;
}

.nav>li>form>button.logout:focus {
    outline: none;
}

.sombra {
    border: #999 1px solid;
    -webkit-box-shadow: 15px 15px 32px 0px rgba(0, 0, 0, 0.49);
    -moz-box-shadow: 15px 15px 32px 0px rgba(0, 0, 0, 0.49);
    box-shadow: 15px 15px 32px 0px rgba(0, 0, 0, 0.49);
}

.btn-sistema {
    color: #fff;
    background-color: $colorPrincipal;
    border-color: $colorSecundario;
}

.skin-red .main-header .navbar {
    background-color: $colorPrincipal;
}

.linea {
    border: $colorPrincipal 1px solid;
}

.headModal {
    background-color: $colorPrincipal;
    color: white;
    font-weight: bold;
}


FINCSS;
?>