<?php
    try {
        $conecta = mysqli_connect("localhost","id10374988_app","teste321","id10374988_app1");
                                //servidor , usuario banco, senha, nome do banco
        $codigo= $_POST['codigo'];
        $query = "delete from tb_livro where cd_livro = $codigo;";

        mysqli_query($conecta,$query);
        echo "registro removido com sucesso";
    } catch (Exception $e ) {
        echo "Erro ao cadastrar: ".$e;
    }
