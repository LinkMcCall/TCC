<?php

    include_once("../php/conexao.php");
        
    date_default_timezone_set('America/Sao_Paulo');
	$titulo = $_POST['titulo'];
	$nome_podcast= $_POST['titulo'];
    $pod= $_FILES['pod'];
	$foto= $_FILES['imgs'];
	$pegaTitu = mysqli_query($link, "SELECT * FROM podcasts WHERE titu_pod = '$titulo'");	
	
	if(mysqli_num_rows($pegaTitu) == 1){
		echo "<script language='javascript' type='text/javascript'>alert('Este ja existe em nossos registros');window.location.href='criar_pod.php'</script>";
	}
		else{

			if (!empty($foto["name"])) {
		
		// Largura máxima em pixels
		$largura = 180000000;
		// Altura máxima em pixels
		$altura = 180000000;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 2516582400;
 
		$error = array();
 
        	// Verifica se o arquivo é uma imagem
    	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
     	   $error[0] = "Isso não é uma imagem.";
   	 	} 
	
		

		if (count($error) == 0) {
		
			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);

        	// Gera um nome único para a imagem
        	$nome_imagem = $nome_podcast . "." . $ext[1] ;

        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "../img/" . $nome_imagem;

			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($foto["tmp_name"], $caminho_imagem);

		}
            
		if (!empty($pod["name"])) {
		
		
		// Tamanho máximo do arquivo em bytes
		$tamanho = 2516582400;
 
		$error = array();
 
        	// Verifica se o arquivo é uma podcast
    	if(!preg_match("/^audio\/(mp3|wma|ogg|wav|flac)$/", $pod["type"])){
     	   $error[0] = "Isso não é um .";
   	 	} 
	
		
		// Verifica se o tamanho da podcast é maior que o tamanho permitido
		if($pod["size"] > $tamanho) {
   		 	$error[3] = "A podcast deve ter no máximo ".$tamanho." bytes";
		}

		// Se não houver nenhum erro
		if (count($error) == 0) {
		
			// Pega extensão da podcast
			preg_match("/\.(mp3|wma|ogg|wav|flac)$/", $pod["type"], $ext);

        	// Gera um nome único para a podcast
        	$nome_podcast = $nome_podcast . ".mp3" ;

        	// Caminho de onde ficará a podcast
        	$caminho_podcast = "../podcast/" . $nome_podcast ;

			// Faz o upload da podcast para seu respectivo caminho
			move_uploaded_file($pod["tmp_name"], $caminho_podcast);
		    
            $date = date('Y-m-d H:i:s');
			// Insere os dados no banco
			$sql = mysqli_query($link,"INSERT INTO podcasts(titu_pod, nome_podcast, img, date)  VALUES ('$titulo', '$nome_podcast', '$nome_imagem','$date')");
		
			// Se os dados forem inseridos com sucesso
			if (mysqli_affected_rows($link) != 0){
				echo "Você foi cadastrado com sucesso.";
                  echo "
                    <script language='javascript' type='text/javascript'>alert('Noticia cadastrada!');window.location.href=' ../admin/perfil_adm.php'</script>";
                ;  
			}else{
                echo "
                    <script language='javascript' type='text/javascript'>alert('Nao foi possivel cadastrar esta notícia');window.location.href=' criar_pod.php'</script>"
                ;    
            }
		}
	
		// Se houver mensagens de erro, exibe-as
		if (count($error) != 0) {
			foreach ($error as $erro) {
				echo $erro . "<br />";
			}
		}
	} 
        }
    }
?>
