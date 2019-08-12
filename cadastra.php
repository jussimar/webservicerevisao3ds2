<?php
    try {
        $conecta = mysqli_connect("localhost","id10374988_app","teste321","id10374988_app1");
                                //servidor , usuario banco, senha, nome do banco

        $livro = $_POST['livro'];
        $autor = $_POST['autor'];
        $ano = $_POST['ano'];

        if($_FILES['foto']['name'] != ''){
            $test = explode('.', $_FILES['foto']['name']);
            $extensao = end($test);
            if($extensao == "jpg" || $extensao == "png"){
                $nome = rand(100,9999).'.'.$extensao;
                $local = 'foto/'.$nome;
                move_uploaded_file($_FILES['foto']['tmp_name'], $local);
            }
        }


        $query = "insert into tb_livro values (null, '$livro', '$autor','$ano','$local');";

        mysqli_query($conecta,$query);
        echo "Cadastro realizado com sucesso";
    } catch (Exception $e ) {
        echo "Erro ao cadastrar: ".$e;
    }


//alter TABLE tb_livro add COLUMN uri_imagem varchar(255); -> Comando para incluir coluna
