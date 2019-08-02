<?php
    try {
        $conecta = mysqli_connect("localhost","id10374988_app","teste321","id10374988_app1");
                                //servidor , usuario banco, senha, nome do banco

        $livro = $_POST['livro'];
        $autor = $_POST['autor'];
        $ano = $_POST['ano'];


        $query = "insert into tb_livro values (null, '$livro', '$autor','$ano');";

        mysqli_query($conecta,$query);
        echo "Cadastro realizado com sucesso";
    } catch (Exception $e ) {
        echo "Erro ao cadastrar: ".$e;
    }
