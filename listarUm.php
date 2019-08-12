<?php
    try {
      $conecta = mysqli_connect("localhost","id10374988_app","teste321","id10374988_app1");
                              //servidor , usuario banco, senha, nome do banco

      $codigo = $_POST['codigo'];
      $query = "select * from tb_livro where cd_livro = $codigo";


        $resultado = mysqli_query($conecta,$query);


        while($linha = mysqli_fetch_assoc($resultado)){
          $registro = array(
              'livro'=>array(
                'codigo' => $linha['cd_livro'],
                'titulo' => $linha['nm_livro'],
                'autor' => $linha['nm_autor'],
                'ano' => $linha['ano'],
                'imagem' => $linha['uri_imagem'],
              )
          );
        }

       echo json_encode($registro);

    } catch (Exception $e ) {
        echo "Erro ao buscar: ".$e;
    }
