<?php
    namespace PHP\Modelo\DAO;
        
    require_once('Conecxao.php');

    use PHP\Modelo\DAO\Conecxao;  

    class Atualizar{
        public function update(Conecxao $conexao, string $campo, string $novoDado, 
            string $codigo, string $nomeTabela){
            try{
                $conec  = $conexao->conectar();
                $sql    = "update $nomeDaTabela set $campo = '$novoDado' where codigo = '$codigo'";
                $result = mysqli_query($conec,$sql);


                mysqli_close($conec);
                
                if($result){
                    echo "<br><br<Dado atualizado com sucesso!";
                    return;
                }
                echo "<br><br>Não foi possível atualizar o dado da tabela."
            }catch(Except $erro)
            echo $erro;
        }
        
    }


?>