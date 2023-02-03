<?php
    
        namespace PHP\Modelo\DAO;
        
        require_once('Conecxao.php');
        
        use PHP\Modelo\DAO\Conecxao;

        class Inserir{
            public function cadastrar(Conecxao $conexao, string $nomeDaTabela, 
            string $nome, string $telefone)
            {
                try{
                    $conec = $conexao->conectar();//Abrindo a conexão com o banco de dados.
                    $sql = "insert into $nomeDaTabela 
                    (codigo, nome, telefone) values ('','$nome','$telefone')";//Escrevi o script.
                    $result = mysqli_query($conec,$sql);//Executa e insere no banco de dados.

                    mysqli_close($conec);//Fechando a conexão.
                    if($result){
                        return "<br><br> Inserido perfeitamente carai!!";
                    }
                    return "<br><br> Irmão, não foi inserido!";
                }catch(Except $erro){
                    echo $erro;
                }
            }//Fim do Inserir.
        }//Fim Classe.
?>