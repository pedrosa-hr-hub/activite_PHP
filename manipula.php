<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style type="text/css">
        body {
        background-color: aquamarine;
        position: absolute;
        left: 30%;
        top: 30%;
        font-style: oblique;
        }       
        </style>
        <title>Document</title>
</head>
<body>
<?php 
        $codigo_cliente = $_POST['cdg_cliente']; //recebe codigo
        $nome_arquivo = $_POST['nome_arq']; //recebe nome
        $texto_arquivo = $_POST['text_arq']; //recebe texto

        if(is_dir($codigo_cliente)){ //verifica se existe pasta com o mesmo codigo se sim
                echo "Existe diretorio <br>";
                echo "<br>";
                chdir($codigo_cliente);//entra no diretorio
                $arquivo=fopen("$nome_arquivo.txt","a"); //abre arquivo
                fwrite($arquivo,$texto_arquivo); //escreve no arquivo
                fclose($arquivo); //fecha arquivo
                echo "Arquivo sobrescrito";
                echo "<br>";
                echo "<br>";                
        }else{ //se não
                mkdir($codigo_cliente); //cria diretorio
                chdir("$codigo_cliente"); //entra no diretorio
                $arquivo=fopen("$nome_arquivo.txt","x+"); //cria arquivo
                fwrite($arquivo,$texto_arquivo); //escreve arquivo
                fclose($arquivo); //fecha arquivo
                echo "Arquivo gravado!";
                echo "<br>";
                echo "<br>";
        }

        //lista diretorios
        $dir = 'C:\xampp\htdocs\aula1409'; //guarda diretorio
        if(is_dir($dir)){ //verifica se existe
                if($op_dir = opendir($dir)){ //se existir abre
                        echo "Listando arquivos";
                        echo "<br>";
                        echo "<br>";
                        while (($file = readdir($op_dir)) !== false){ //le um por um os arquivos do diretorio
                                echo "nome do arquivo: ". $file. "<br>"; //imprime
                        }
                        closedir($op_dir); //fecha
                }
        }

?>
</body>
</html>

