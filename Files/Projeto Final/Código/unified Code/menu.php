<?php
include('verifica-login.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="_css/login.css">
   	<script type="text/javascript">
	    startList = function() {
	    if (document.all&&document.getElementById) {
	    navRoot = document.getElementById("menuDropDown");
	    for (i=0; i<navRoot.childNodes.length; i++) {
	    node = navRoot.childNodes[i];
	    if (node.nodeName=="LI") {
	    node.onmouseover=function() {
	    this.className+=" over";
	      }
	      node.onmouseout=function() {
	      this.className=this.className.replace
	      (" over", "");
	       }
	       }
	      }
	     }
	    }
	    window.onload=startList;
	</script>
</head>
<body>
<font size="3" face="arial">
	<style>
		body{
			background-image:url("_imagens/bgverde.jpg");
			background-attachment:fixed;
			background-size:100% 100%;
			background-repeat:no-repeat;
		}
	</style>
	<!-- menu da pagina -->
			<div id="interface">
					<!-- Incio da barra de pesquisa -->
					<table>
						<tr>
							<td>
								<form method="post" action="pesquisa.php">
								<div id="divBusca">
								<input type="text" id="txtBusca" name="busca" placeholder="Buscar..."/>
								<button id="btnBusca" type="submit">
									<img src="_imagens/1.png"/>
								</button>
								</div>
								</form>
							</td>
							<td>
								<nav id="menu">
									<ul> 
									    <li><a href="#"><b>Configuração</b></a>
									      <ul> 
									        <li><a href="pagina-pricipal.php">Inicio</a></li> 
									        <li><a href="perfil.php">Perfil</a></li> 
									        <li><a href="fotos.php">Fotos</a></li> 
									        <li><?php echo "<a href='amigo.php?id=".$_SESSION['id']."'>";?>Amigos</a></li>
									        <li><a href="logout.php"><b>Sair</b></a></li> 
									      </ul> 
										</li>
									</ul>
								</nav>
							</td>
						<!-- Fim da barra de pesquisa -->
						</tr>
					</table>
			</div>
			</font>
		<!-- Fim de menu -->

</body>
</html>