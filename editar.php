<?php
    try {
        $conecta = mysqli_connect("localhost","id10374988_app","teste321","id10374988_app1");
                                //servidor , usuario banco, senha, nome do banco

        $codigo = $_POST['codigo'];
        $livro = $_POST['livro'];
        $autor = $_POST['autor'];
        $ano = $_POST['ano'];


        $query = "update tb_livro set nm_livro = '$livro', nm_autor = '$autor',ano = '$ano' where cd_livro = $codigo";

        mysqli_query($conecta,$query);
        echo "Registro realizado com sucesso";
    } catch (Exception $e ) {
        echo "Erro ao cadastrar: ".$e;
    }
