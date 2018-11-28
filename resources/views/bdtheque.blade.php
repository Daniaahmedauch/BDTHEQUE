<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BDTHEQUE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"> 
</head>

<body>
<div class="un"

<nav class="navbar navbar-dark bg-primary">
<a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="dropdown">
<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
Menu déroulant
<span class="caret"></span>
</button>
<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
<li><a href="#" title="Lien 1">Lien 1</a></li>
<li><a href="#" title="Lien 2">Lien 2</a></li>
<li><a href="#" title="Lien 3">Lien 3</a></li>
<li role="separator" class="divider"></li>
<li><a href="#" title="Lien 4">Lien 4</a></li>
</ul>
</div> 

  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="pagedaccueil.blade.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Features</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
      <a class="nav-item nav-link disabled" href="#">Disabled</a>
      
    </div>
  </div>
</nav>
</div> 

<p class="flotte">
 <img src="/css/img/logo.jpeg" alt="Nouveau !" />
</p>
<p>

<h1 class='titre'>  <img src="/css/img/welcome.jpeg" class="welcome"> TO  <img src="/css/img/bd.png" class="mini">TCHÈQUE <img src="/css/img/haha.gif" class="mini"> </h1> 
<div class="color"> 
<a href="/liste_bd/a">A</a>   
<a href="/liste_bd/b">B</a>          
<a href="/liste_bd/a">C</a> 
<a href="/liste_bd/a">D</a>   
<a href="/liste_bd/a">E</a>          
<a href="/liste_bd/a">F</a>   
<a href="/liste_bd/a">G</a>   
<a href="/liste_bd/a">H</a>   
<a href="/liste_bd/a">I</a>   
<a href="/liste_bd/a">J</a>   
<a href="/liste_bd/a">K</a>  
<a href="/liste_bd/a">L</a>  
<a href="/liste_bd/a">M</a>  
<a href="/liste_bd/a">N</a>  
<a href="/liste_bd/a">O</a>  
<a href="/liste_bd/a">P</a>   
<a href="/liste_bd/a">Q</a>   
<a href="/liste_bd/a">R</a>  
<a href="/liste_bd/a">S</a>   
<a href="/liste_bd/a">T</a>   
<a href="/liste_bd/a">U</a>   
<a href="/liste_bd/a">V</a>   
<a href="/liste_bd/a">W</a>   
<a href="/liste_bd/a">X</a>   
<a href="/liste_bd/a">Y</a>   
<a href="/liste_bd/a">Z</a> 
</div>
<br>
<br>
<div class="boom" style="display:inline-block;">
</div>
<div class="matable"style="display:inline-block;" >
<table class="table table-striped">

<th scope="col" > A </th>
<th scope="col"> Nom  </th> 
<th scope="col" > Auteur  </th> 
<th scope="col" > Collection </th>
<th scope ="col"> Add collection list </th>
<th scope ="col"> Add wish list </th>
<tr>
@foreach ($liste_bd as $liste_bd)
<!-- <td> <img src="/css/img/a1.jpg" onclick="window.open(this.src,'_blank','toolbar=0, location=0, directories=0, status=0, scrollbars=0, resizable=0, copyhistory=0, menuBar=0, width='+this.width+', height='+this.height);" /> </td>  -->
<td> <img src=" {{ $liste_bd->images}}"> </td>
<td> {{ $liste_bd->nom_bd}}  </td>
<td> {{ $liste_bd->auteur}} </td>
<td> {{ $liste_bd->collection}}</td>
<td> <button> Ajouter </button> </td>
<td> <button> Ajouter </button> </td>
</tr>

@endforeach 
</div>
</table>


</body>
</html>


