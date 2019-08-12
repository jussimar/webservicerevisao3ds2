<?php
    try {
      $conecta = mysqli_connect("localhost","id10374988_app","teste321","id10374988_app1");
                              //servidor , usuario banco, senha, nome do banco

      $query = "select * from tb_livro";


        $resultado = mysqli_query($conecta,$query);

        $registro = array(
            'livros'=>array()
        );

        $i =0;

        while($linha = mysqli_fetch_assoc($resultado)){
            $registro['livros'][$i] = array(
                'codigo' => $linha['cd_livro'],
                'titulo' => $linha['nm_livro'],
                'autor' => $linha['nm_autor'],
                'ano' => $linha['nm_autor'],
                
            );
            $i++;
        }

       echo json_encode($registro);

    } catch (Exception $e ) {
        echo "Erro ao buscar: ".$e;
    }
