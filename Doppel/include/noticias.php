        <div class="row" id="noticias"> <!-- div para o titulo inicial e subtitulo -->

            <div class="col-12 text-center my-3 look">
                <h3 class="display-3">Contéudo Geek</h5>
                    <BR>
                <p>Tudo sobre games, animes e muito mais em nosso site.<br></p>
            </div>

        </div>

        <div class="row">
            <?php 
    if(!isset($_GET['categoria'])){
            echo'
                <div class="col-md-12 text-md-center my-3 look">
                <nav class="nav flex-sm-column flex-md-row d-md-flex justify-content-center p-0">
                    <a href="index.php?categoria=Games" class="mx-md-4 my-sm-2 mx-sm-0 border rounded p-2 text-white bt-menu">Games</a>
                    <a href="index.php?categoria=Anime"  class="mx-md-4 my-sm-2 mx-4 mx-sm-0 border rounded p-2 text-white bt-menu">Animes</a>
                    <a href="index.php?categoria=Hqs"  class="mx-md-4 my-sm-2 mx-4 mx-sm-0 border rounded p-2 text-white bt-menu">Hqs</a>
                    <a href="index.php?categoria=Manga"  class="mx-md-4 my-sm-2 mx-4 mx-sm-0 border rounded p-2 text-white bt-menu">Manga</a>
                    <a href="index.php?categoria=Podcast"  class="mx-md-4 my-sm-2 mx-4 mx-sm-0 border rounded p-2 text-white bt-menu">Podcast</a>
                    </nav>
                </div>

            </div>
            
            
            ';
// Seleciona todas as noticias
$maximo_registros_exibidos=4;
$maximo_registros_exibidos2=1;                         
if(isset($_GET["pg"])){
    $pagina_atual=$_GET["pg"];
}else{
    $pagina_atual=1;
}
$ct=0;
$inicio= $pagina_atual-1; 
$inicio*= $maximo_registros_exibidos;
                        
$select = "select * from noticias ORDER BY date desc LIMIT $inicio,$maximo_registros_exibidos";
$sql = mysqli_query($link, $select);

$total_registros= mysqli_num_rows(mysqli_query($link, "select * from noticias ORDER BY date desc"));

$total_paginas= $total_registros/$maximo_registros_exibidos;
// Exibe quantas noticias por pagina o site vai ter
while ($usuario = mysqli_fetch_object($sql)) {
    $tempo;
    if($usuario->date < $datem) {
       $tempo = $usuario->date;
        $tempo = new DateTime($tempo);
        $tempo = $tempo->format('d-m-Y');
    } else {
        $udate= $usuario->date;
        $date1 = new DateTime($date);
        $date2 = new DateTime($usuario->date);
        $intervalo = $date1->diff($date2);
        $ind = $intervalo->d;
        if($ind == 0) {
           $hora = $intervalo->h;
           if ($hora == 0 ) {
               $min = $intervalo->i;
               if($min == 0 ) {
                   $tempo = "Agora Mesmo";
               } else {
                   $tempo = "há ".$min." Minutos";
               }
           } else {
               $tempo = "há ".$hora." Horas";
           }      
        } else {
            $tempo = "há ".$ind." Dias";
        }
    } 
	// Mostra há quanto tempo a noticia está no ar
	
     if ($ct==3) {

$select2 = "select * from podcasts ORDER BY date desc LIMIT $inicio,1";
$sql2 = mysqli_query($link, $select2);

$total_registros2= mysqli_num-
$total_pagina2s= $total_registros2/$maximo_registros_exibidos2;      
      $z = mysqli_fetch_object($sql2);
	echo "
    <div class='d-md-flex p-md-1 p-sm-0 mb-2 '>
            
        <div class='featured__head'>
            <a href='".BASE."podcast/player_pod.php?id=".$z->id_pod."' class='picture_top'>
                <img src='".BASE."img/".$z->img."' alt='Foto de exibição' class='img-fluid  picture lock_not rounded'><br />
           </a>
       </div>
    ";
        $tempo2 = $z->date;
        $tempo2 = new DateTime($tempo2);
        $tempo2 = $tempo2->format('d-m-Y');
    echo "
        <div class='col-sm-12 col-md-4 col-lg-7 p-0'>
            <div class='d-flex'>
                <a href='#' class='tema p-md-2 py-sm-2 px-sm-0' id='orange'>Podcast</a>
                <p class='p-md-2 py-sm-2 pl-sm-2 pr-sm-0 tempo'>$tempo2</p>
            </div>
        <div class='p-md-2 p-sm-0'>
        <a href='".BASE."podcast/player_pod.php?id=".$z->id_pod."' class='link_titulo'>
            <p class='titulo cool-link-titu'> ".$z->titu_pod."</p>

        </a>
        <p class='manchete'>Neste podcast falamos sobre ".$z->sobre.".</p>
        </div>
         </div>
         </div>
    ";
    }
    // Podcast
	echo "
    <div class='d-md-flex p-md-1 p-sm-0 mb-2 '>
            
        <div class='featured__head'>
            <a href='".BASE."not_html/mostrar_not.php?id=".$usuario->id_noticia."' class='picture_top'>
                <img src='".BASE."img/".$usuario->imgs."' alt='Foto de exibição' class='img-fluid  picture lock_not rounded'><br />
           </a>
       </div>
    ";
    
	echo "
        <div class='col-sm-12 col-md-4 col-lg-7 p-0'>
            <div class='d-flex'>
                <a href='".BASE."index.php?categoria=".$usuario->tema."' class='tema p-md-2 py-sm-2 px-sm-0' id='orange'>".$usuario->tema."</a>
                <p class='p-md-2 py-sm-2 pl-sm-2 pr-sm-0 tempo'>$tempo</p>
            </div>
        <div class='p-md-2 p-sm-0'>
        <a href='".BASE."not_html/mostrar_not.php?id=".$usuario->id_noticia."' class='link_titulo'>
            <p class='titulo cool-link-titu'> ".$usuario->titu_not."</p>
            
        </a>
        <p class='manchete'>".$usuario->manchete."</p>
        </div>
         </div>
         </div>
    ";
     $ct++;
} // Exibe todas as noticias do site
        
        $anterior=$pagina_atual-1;
        $proxima=$pagina_atual+1;
        echo '<div class="justify-content-center d-flex p-4  lok">';
		if($pagina_atual>1){
			echo "<div class='p-2'><a class='p-2 bt-bot2 h6 border rounded text-white lok' href='index.php?pg=".$anterior."'>     <span id='orange'><i class='icon-prev ic-tm' id='orange'></i></span> Anterior</a></div>";
        }
        for($ip=0;$ip<$total_paginas;$ip++){
					
					if($pagina_atual == ($ip+1)){
						echo "<div><p class='p-1 pl-4 pr-4 h5 bt-bot text-white lok'>".($ip+1)."</p></div>";
					}
            
        }
        echo "<p class='p-1 pl-1 pr-2 h5  text-white lok'>de  <span class='ml-1 lok'>".ceil($total_paginas)."</span><p>";
        if($pagina_atual<$total_paginas ){        
            echo "<div class='p-2'><a class='p-2 bt-bot2 h6 border rounded text-white lok' href='index.php?pg=".$proxima."'>Próxima     <span id='orange'><i class='icon-next ic-tm' id='orange'></i></span></a></div>";
        }
        echo '</div>';
		// Mostra quantidade de paginas deixando possivel avançar ou retornar para outra pagina
        }else{
    if($_GET['categoria'] =='Games'){
            echo'
                <div class="col-12 text-center my-3  look">
                    <a href="index.php"  class="mx-4 border rounded p-2 text-white bt-menu bt-menu-active">Games</a>
                    <a href="index.php?categoria=Anime"  class="mx-4 border rounded p-2 text-white bt-menu">Animes</a>
                    <a href="index.php?categoria=Hqs"  class="mx-4 border rounded p-2 text-white bt-menu">Hqs</a>
                    <a href="index.php?categoria=Manga"  class="mx-4 border rounded p-2 text-white bt-menu">Manga</a>
                    <a href="index.php?categoria=Podcast"  class="mx-md-4 my-sm-2 mx-4 mx-sm-0 border rounded p-2 text-white bt-menu">Podcast</a>
                </div>

            </div>
            ';
              } else{
    
          if($_GET['categoria']=='Anime'){
            echo'
                <div class="col-12 text-center my-3  look">
                    <a href="index.php?categoria=Games" " class="mx-4 border rounded p-2 text-white bt-menu">Games</a>
                    <a href="index.php" " class="mx-4 border rounded p-2 text-white bt-menu bt-menu-active">Animes</a>
                    <a href="index.php?categoria=Hqs" " class="mx-4 border rounded p-2 text-white bt-menu">Hqs</a>
                    <a href="index.php?categoria=Manga"  class="mx-4 border rounded p-2 text-white bt-menu">Manga</a>
                    <a href="index.php?categoria=Podcast"  class="mx-md-4 my-sm-2 mx-4 mx-sm-0 border rounded p-2 text-white bt-menu">Podcast</a>
                </div>

            </div>
            ';
            
        }else{
                 if($_GET['categoria']=='Hqs'){
            echo'
                <div class="col-12 text-center my-3  look">
                    <a href="index.php?categoria=Games"  class="mx-4 border rounded p-2 text-white bt-menu">Games</a>
                    <a href="index.php?categoria=Anime"  class="mx-4 border rounded p-2 text-white bt-menu">Animes</a>
                    <a href="index.php"  class="mx-4 border rounded p-2 text-white bt-menu bt-menu-active">Hqs</a>
                    <a href="index.php?categoria=Manga"  class="mx-4 border rounded p-2 text-white bt-menu">Manga</a>
                    <a href="index.php?categoria=Podcast"  class="mx-md-4 my-sm-2 mx-4 mx-sm-0 border rounded p-2 text-white bt-menu">Podcast</a>
                </div>

            </div>
            ';     
       }else{
                     
                         if($_GET['categoria']=='Manga'){
            echo'
                <div class="col-12 text-center my-3  look">
                    <a href="index.php?categoria=Games"  class="mx-4 border rounded p-2 text-white bt-menu">Games</a>
                    <a href="index.php?categoria=Anime"  class="mx-4 border rounded p-2 text-white bt-menu">Animes</a>
                    <a href="index.php?categoria=Hqs"  class="mx-4 border rounded p-2 text-white bt-menu">Hqs</a>
                    <a href="index.php"  class="mx-4 border rounded p-2 text-white bt-menu bt-menu-active">Manga</a>
                    <a href="index.php?categoria=Podcast"  class="mx-md-4 my-sm-2 mx-4 mx-sm-0 border rounded p-2 text-white bt-menu">Podcast</a>
                </div>

            </div>
            '; 
        }else{
                     
                         if($_GET['categoria']=='Podcast'){
            echo'
                <div class="col-12 text-center my-3  look">
                    <a href="index.php?categoria=Games"  class="mx-4 border rounded p-2 text-white bt-menu">Games</a>
                    <a href="index.php?categoria=Anime"  class="mx-4 border rounded p-2 text-white bt-menu">Animes</a>
                    <a href="index.php?categoria=Hqs"  class="mx-4 border rounded p-2 text-white bt-menu">Hqs</a>
                    <a href="index.php?categoria=Manga"  class="mx-4 border rounded p-2 text-white bt-menu ">Manga</a>
                    <a href="index.php"  class="mx-md-4 my-sm-2 mx-4 mx-sm-0 border rounded p-2 text-white bt-menu bt-menu-active">Podcast</a> 
                </div>

            </div>
            '; 
        }
        }}}}}
		// Posibilita o usuario escolher a categoria de noticia que ele quer ver	
                ?>


            <?php
    if(isset($_GET['categoria'])){
    if($_GET['categoria']=='Games') {
   $maximo_registros_exibidos=4;
                        
if(isset($_GET["pg"])){
    $pagina_atual=$_GET["pg"];
}else{
    $pagina_atual=1;
}
$inicio= $pagina_atual-1; 
$inicio*= $maximo_registros_exibidos;
                        
$select = "SELECT * FROM noticias WHERE tema LIKE 'Games' ORDER BY date desc LIMIT $inicio,$maximo_registros_exibidos";
$sql = mysqli_query($link, $select);

$total_registros= mysqli_num_rows(mysqli_query($link, "select * from noticias WHERE tema LIKE 'Games' ORDER BY date desc"));

$total_paginas= $total_registros/$maximo_registros_exibidos;

while ($usuario = mysqli_fetch_object($sql)) {
	    $tempo;
 $tempo;
    if($usuario->date < $datem) {
       $tempo = $usuario->date;
        $tempo = new DateTime($tempo);
        $tempo = $tempo->format('d-m-Y');
    } else {
        $udate= $usuario->date;
        $date1 = new DateTime($date);
        $date2 = new DateTime($usuario->date);
        $intervalo = $date1->diff($date2);
        $ind = $intervalo->d;
        if($ind == 0) {
           $hora = $intervalo->h;
           if ($hora == 0 ) {
               $min = $intervalo->i;
               if($min == 0 ) {
                   $tempo = "Agora Mesmo";
               } else {
                   $tempo = "há ".$min." Minutos";
               }
           } else {
               $tempo = "há ".$hora." Horas";
           }      
        } else {
            $tempo = "há ".$ind." Dias";
        }
    }
	// Mostra há quanto tempo a noticia está no ar
	echo "
    <div class='d-flex p-1 mb-2 '>
            
        <div class='featured__head'>
            <a href='".BASE."not_html/mostrar_not.php?id=".$usuario->id_noticia."' class='picture_top'>
                <img src='".BASE."img/".$usuario->imgs."' alt='Foto de exibição' class='img-fluid  picture lock_not rounded'><br />
           </a>
       </div>
    ";
    
	echo "
        <div class='col-sm-6 col-md-4 col-lg-7'>
            <div class='d-flex'>
                <p class='tema p-2' id='orange'>".$usuario->tema."</p>
                <p class='p-2 tempo'>$tempo</p>
            </div>
        <div class='p-2'>
        <a href='".BASE."not_html/mostrar_not.php?id=".$usuario->id_noticia."' class='link_titulo'>
            <p class='titulo'> $usuario->titu_not</p>
            
        </a>
        <p class='manchete'>".$usuario->manchete."</p>
        </div>
         </div>
         </div>
    ";
}   
	// Exibe as noticias dessa categoria
         $anterior=$pagina_atual-1;
        $proxima=$pagina_atual+1;
        echo '<div class="justify-content-center d-flex p-4">';
		if($pagina_atual>1){
			echo "<div class='p-2'><a class='p-2 bt-bot2 h6 border rounded text-white' href='index.php?categoria=Games&pg=".$anterior."'>     <span id='orange'><i class='icon-prev'></i></span> Anterior</a></div>";
        }
        for($ip=0;$ip<$total_paginas;$ip++){
					
					if($pagina_atual == ($ip+1)){
						echo "<div><p class='p-1 pl-4 pr-4 h5 bt-bot text-white'>".($ip+1)."</p></div>";
					}
            
        }
        echo "<p class='p-1 pl-1 pr-2 h5  text-white'>de  <span class='ml-1'>".ceil($total_paginas)."</span><p>";
        if($pagina_atual<$total_paginas ){        
            echo "<div class='p-2'><a class='p-2 bt-bot2 h6 border rounded text-white' href='index.php?categoria=Games&pg=".$proxima."'>Próxima     <span id='orange'><i class='icon-next'></i></span></a></div>";
        }
        echo '</div>';
    }

        } 
		// Mostra quantidade de paginas deixando possivel avançar ou retornar para outra pagina
?>
            <?php
    if(isset($_GET['categoria'])){
    if($_GET['categoria']=='Anime') {
    
 $maximo_registros_exibidos=4;
                        
if(isset($_GET["pg"])){
    $pagina_atual=$_GET["pg"];
}else{
    $pagina_atual=1;
}
$inicio= $pagina_atual-1; 
$inicio*= $maximo_registros_exibidos;
                        
$select = "SELECT * FROM noticias WHERE tema LIKE 'Anime' ORDER BY date desc LIMIT $inicio,$maximo_registros_exibidos";
$sql = mysqli_query($link, $select);

$total_registros= mysqli_num_rows(mysqli_query($link, "select * from noticias WHERE tema LIKE 'Anime' ORDER BY date desc"));

$total_paginas= $total_registros/$maximo_registros_exibidos;

while ($usuario = mysqli_fetch_object($sql)) {
	   	    $tempo;
 $tempo;
    if($usuario->date < $datem) {
       $tempo = $usuario->date;
        $tempo = new DateTime($tempo);
        $tempo = $tempo->format('d-m-Y');
    } else {
        $udate= $usuario->date;
        $date1 = new DateTime($date);
        $date2 = new DateTime($usuario->date);
        $intervalo = $date1->diff($date2);
        $ind = $intervalo->d;
        if($ind == 0) {
           $hora = $intervalo->h;
           if ($hora == 0 ) {
               $min = $intervalo->i;
               if($min == 0 ) {
                   $tempo = "Agora Mesmo";
               } else {
                   $tempo = "há ".$min." Minutos";
               }
           } else {
               $tempo = "há ".$hora." Horas";
           }      
        } else {
            $tempo = "há ".$ind." Dias";
        }
    }
	// Mostra há quanto tempo a noticia está no ar
	echo "
    <div class='d-flex p-1 mb-2 '>
            
        <div class='featured__head'>
            <a href='".BASE."not_html/mostrar_not.php?id=".$usuario->id_noticia."' class='picture_top'>
                <img src='".BASE."img/".$usuario->imgs."' alt='Foto de exibição' class='img-fluid  picture lock_not rounded'><br />
           </a>
       </div>
    ";
 
	echo "
        <div class='col-sm-6 col-md-4 col-lg-7'>
            <div class='d-flex'>
                <p class='tema p-2' id='orange'>".$usuario->tema."</p>
                <p class='p-2 tempo'>$tempo</p>
            </div>
        <div class='p-2'>
        <a href='".BASE."not_html/mostrar_not.php?id=".$usuario->id_noticia."' class='link_titulo'>
            <p class='titulo'> $usuario->titu_not</p>
            
        </a>
        <p class='manchete'>".$usuario->manchete."</p>
        </div>
         </div>
         </div>
    ";
} 
		// Exibe as noticias dessa categoria

         $anterior=$pagina_atual-1;
        $proxima=$pagina_atual+1;
        echo '<div class="justify-content-center d-flex p-4">';
		if($pagina_atual>1){
			echo "<div class='p-2'><a class='p-2 bt-bot2 h6 border rounded text-white' href='index.php?categoria=Anime&pg=".$anterior."'>     <span id='orange'><i class='icon-prev'></i></span> Anterior</a></div>";
        }
        for($ip=0;$ip<$total_paginas;$ip++){
					
					if($pagina_atual == ($ip+1)){
						echo "<div><p class='p-1 pl-4 pr-4 h5 bt-bot text-white'>".($ip+1)."</p></div>";
					}
            
        }
        echo "<p class='p-1 pl-1 pr-2 h5  text-white'>de  <span class='ml-1'>".ceil($total_paginas)."</span><p>";
        if($pagina_atual<$total_paginas ){        
            echo "<div class='p-2'><a class='p-2 bt-bot2 h6 border rounded text-white' href='index.php?categoria=Anime&pg=".$proxima."'>Próxima     <span id='orange'><i class='icon-next'></i></span></a></div>";
        }
        echo '</div>';
    }
    }
	// Mostra quantidade de paginas deixando possivel avançar ou retornar para outra pagina
	
?>
            <?php
    if(isset($_GET['categoria'])){
    if($_GET['categoria']=='Hqs') {
   $maximo_registros_exibidos=4;   
if(isset($_GET["pg"])){
    $pagina_atual=$_GET["pg"];
}else{
    $pagina_atual=1;
}
$inicio= $pagina_atual-1; 
$inicio*= $maximo_registros_exibidos;
                        
$select = "SELECT * FROM noticias WHERE tema LIKE 'Hqs' ORDER BY date desc LIMIT $inicio,$maximo_registros_exibidos";
$sql = mysqli_query($link, $select);

$total_registros= mysqli_num_rows(mysqli_query($link, "select * from noticias WHERE tema LIKE 'Hqs' ORDER BY date desc"));

$total_paginas= $total_registros/$maximo_registros_exibidos;
 
while ($usuario = mysqli_fetch_object($sql)) {
		    $tempo;
 $tempo;
    if($usuario->date < $datem) {
       $tempo = $usuario->date;
        $tempo = new DateTime($tempo);
        $tempo = $tempo->format('d-m-Y');
    } else {
        $udate= $usuario->date;
        $date1 = new DateTime($date);
        $date2 = new DateTime($usuario->date);
        $intervalo = $date1->diff($date2);
        $ind = $intervalo->d;
        if($ind == 0) {
           $hora = $intervalo->h;
           if ($hora == 0 ) {
               $min = $intervalo->i;
               if($min == 0 ) {
                   $tempo = "Agora Mesmo";
               } else {
                   $tempo = "há ".$min." Minutos";
               }
           } else {
               $tempo = "há ".$hora." Horas";
           }      
        } else {
            $tempo = "há ".$ind." Dias";
        }
    }
	// Mostra há quanto tempo a noticia está no ar
	echo "
    <div class='d-flex p-1 mb-2 '>
            
        <div class='featured__head'>
            <a href='".BASE."not_html/mostrar_not.php?id=".$usuario->id_noticia."' class='picture_top'>
                <img src='".BASE."img/".$usuario->imgs."' alt='Foto de exibição' class='img-fluid  picture lock_not rounded'><br />
           </a>
       </div>
    ";
    
	echo "
        <div class='col-sm-6 col-md-4 col-lg-7'>
            <div class='d-flex'>
                <p class='tema p-2' id='orange'>".$usuario->tema."</p>
                <p class='p-2 tempo'>$tempo</p>
            </div>
        <div class='p-2'>
        <a href='".BASE."not_html/mostrar_not.php?id=".$usuario->id_noticia."' class='link_titulo'>
            <p class='titulo'> $usuario->titu_not</p>
            
        </a>
        <p class='manchete'>".$usuario->manchete."</p>
        </div>
         </div>
         </div>
    ";
} 
	// Exibe as noticias dessa categoria

	
        $anterior=$pagina_atual-1;
        $proxima=$pagina_atual+1;
        echo '<div class="justify-content-center d-flex p-4">';
		if($pagina_atual>1){
			echo "<div class='p-2'><a class='p-2 bt-bot2 h6 border rounded text-white' href='index.php?categoria=Hqs&pg=".$anterior."'>     <span id='orange'><i class='icon-prev'></i></span> Anterior</a></div>";
        }
        for($ip=0;$ip<$total_paginas;$ip++){
					
					if($pagina_atual == ($ip+1)){
						echo "<div><p class='p-1 pl-4 pr-4 h5 bt-bot text-white'>".($ip+1)."</p></div>";
					}
            
        }
        echo "<p class='p-1 pl-1 pr-2 h5  text-white'>de  <span class='ml-1'>".ceil($total_paginas)."</span><p>";
        if($pagina_atual<$total_paginas ){        
            echo "<div class='p-2'><a class='p-2 bt-bot2 h6 border rounded text-white' href='index.php?categoria=Hqs&pg=".$proxima."'>Próxima     <span id='orange'><i class='icon-next'></i></span></a></div>";
        }
        echo '</div>';
    }
    }
	// Mostra quantidade de paginas deixando possivel avançar ou retornar para outra pagina
	
?>
            <?php
    if(isset($_GET['categoria'])){
    if($_GET['categoria']=='Manga') {
      $maximo_registros_exibidos=4;

if(isset($_GET["pg"])){
    $pagina_atual=$_GET["pg"];
}else{
    $pagina_atual=1;
}
$inicio= $pagina_atual-1; 
$inicio*= $maximo_registros_exibidos;
                        
$select = "SELECT * FROM noticias WHERE tema LIKE 'Manga' ORDER BY date desc LIMIT $inicio,$maximo_registros_exibidos";
$sql = mysqli_query($link, $select);

$total_registros= mysqli_num_rows(mysqli_query($link, "select * from noticias WHERE tema LIKE 'Manga' ORDER BY date desc"));

$total_paginas= $total_registros/$maximo_registros_exibidos;
 

while ($usuario = mysqli_fetch_object($sql)) {
		    $tempo;
 $tempo;
    if($usuario->date < $datem) {
       $tempo = $usuario->date;
        $tempo = new DateTime($tempo);
        $tempo = $tempo->format('d-m-Y');
    } else {
        $udate= $usuario->date;
        $date1 = new DateTime($date);
        $date2 = new DateTime($usuario->date);
        $intervalo = $date1->diff($date2);
        $ind = $intervalo->d;
        if($ind == 0) {
           $hora = $intervalo->h;
           if ($hora == 0 ) {
               $min = $intervalo->i;
               if($min == 0 ) {
                   $tempo = "Agora Mesmo";
               } else {
                   $tempo = "há ".$min." Minutos";
               }
           } else {
               $tempo = "há ".$hora." Horas";
           }      
        } else {
            $tempo = "há ".$ind." Dias";
        }
    }
	// Exibe há quanto tempo a noticia está no ar
	echo "
    <div class='d-flex p-1 mb-2 '>
            
        <div class='featured__head'>
            <a href='".BASE."not_html/mostrar_not.php?id=".$usuario->id_noticia."' class='picture_top'>
                <img src='".BASE."img/".$usuario->imgs."' alt='Foto de exibição' class='img-fluid  picture lock_not rounded'><br />
           </a>
       </div>
    ";

	echo "
        <div class='col-sm-6 col-md-4 col-lg-7'>
            <div class='d-flex'>
                <p class='tema p-2' id='orange'>".$usuario->tema."</p>
                <p class='p-2 tempo'>$tempo</p>
            </div>
        <div class='p-2'>
        <a href='".BASE."not_html/mostrar_not.php?id=".$usuario->id_noticia."' class='link_titulo'>
            <p class='titulo'> $usuario->titu_not</p>
            
        </a>
        <p class='manchete'>".$usuario->manchete."</p>
        </div>
         </div>
         </div>
    ";
} 
	// Exibe as noticias dessa categoria

        $anterior=$pagina_atual-1;
        $proxima=$pagina_atual+1;
        echo '<div class="justify-content-center d-flex p-4">';
		if($pagina_atual>1){
			echo "<div class='p-2'><a class='p-2 bt-bot2 h6 border rounded text-white' href='index.php?categoria=Manga&pg=".$anterior."'>     <span id='orange'><i class='icon-prev'></i></span> Anterior</a></div>";
        }
        for($ip=0;$ip<$total_paginas;$ip++){
					
					if($pagina_atual == ($ip+1)){
						echo "<div><p class='p-1 pl-4 pr-4 h5 bt-bot text-white'>".($ip+1)."</p></div>";
					}
            
        }
        echo "<p class='p-1 pl-1 pr-2 h5  text-white'>de  <span class='ml-1'>".ceil($total_paginas)."</span><p>";
        if($pagina_atual<$total_paginas ){        
            echo "<div class='p-2'><a class='p-2 bt-bot2 h6 border rounded text-white' href='index.php?categoria=Manga&pg=".$proxima."'>Próxima     <span id='orange'><i class='icon-next'></i></span></a></div>";
        }
        echo '</div>';
    }
    }
	// Mostra quantidade de paginas deixando possivel avançar ou retornar para outra pagina
	
?>
<?php
    if(isset($_GET['categoria'])){
    if($_GET['categoria']=='Podcast') {
   $maximo_registros_exibidos=4;   

if(isset($_GET["pg"])){
    $pagina_atual=$_GET["pg"];
}else{
    $pagina_atual=1;
}
$inicio= $pagina_atual-1; 
$inicio*= $maximo_registros_exibidos;

$select = "select * from podcasts ORDER BY date desc LIMIT $inicio,$maximo_registros_exibidos";
$sql = mysqli_query($link, $select);

$total_registros= mysqli_num_rows(mysqli_query($link, "select * from  podcasts ORDER BY date desc"));

$total_paginas= $total_registros/$maximo_registros_exibidos;
 

while ($usuario = mysqli_fetch_object($sql)){



        echo "
    <div class='d-md-flex p-md-1 p-sm-0 mb-2 '>
            
        <div class='featured__head'>
            <a href='".BASE."podcast/player_pod.php?id=".$usuario->id_pod."' class='picture_top'>
                <img src='".BASE."img/".$usuario->img."' alt='Foto de exibição' class='img-fluid  picture lock_not rounded'><br />
           </a>
       </div>
    ";
    // Exibe o podcast
        $tempo2 = $usuario->date;
        $tempo2 = new DateTime($tempo2);
        $tempo2 = $tempo2->format('d-m-Y');
    echo "
        <div class='col-sm-12 col-md-4 col-lg-7 p-0'>
            <div class='d-flex'>
                <a href='#' class='tema p-md-2 py-sm-2 px-sm-0' id='orange'>Podcast</a>
                <p class='p-md-2 py-sm-2 pl-sm-2 pr-sm-0 tempo'>$tempo2</p>
            </div>
        <div class='p-md-2 p-sm-0'>
        <a href='".BASE."podcast/player_pod.php?id=".$usuario->id_pod."' class='link_titulo'>
            <p class='titulo cool-link-titu'> $usuario->nome_podcast</p>
            
        </a>
        <p class='manchete'>Neste podcast falamos sobre ".$usuario->sobre.".</p>
        </div>
         </div>
         </div>
    ";
} 
	// Podcast
        $anterior=$pagina_atual-1;
        $proxima=$pagina_atual+1;
        echo '<div class="justify-content-center d-flex p-4">';
    if($pagina_atual>1){
      echo "<div class='p-2'><a class='p-2 bt-bot2 h6 border rounded text-white' href='index.php?categoria=Hqs&pg=".$anterior."'>     <span id='orange'><i class='fas fa-chevron-left'></i></span> Anterior</a></div>";
        }
        for($ip=0;$ip<$total_paginas;$ip++){
          
          if($pagina_atual == ($ip+1)){
            echo "<div><p class='p-1 pl-4 pr-4 h5 bt-bot text-white'>".($ip+1)."</p></div>";
          }
            
        }
        echo "<p class='p-1 pl-1 pr-2 h5  text-white'>de  <span class='ml-1'>".ceil($total_paginas)."</span><p>";
        if($pagina_atual<$total_paginas ){        
            echo "<div class='p-2'><a class='p-2 bt-bot2 h6 border rounded text-white' href='index.php?categoria=Hqs&pg=".$proxima."'>Próxima     <span id='orange'><i class='fas fa-chevron-right'></i></span></a></div>";
        }
        echo '</div>';
    }
    }
    	// Mostra quantidade de paginas deixando possivel avançar ou retornar para outra pagina
?>
        </div>
