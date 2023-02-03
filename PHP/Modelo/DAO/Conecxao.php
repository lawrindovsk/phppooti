<?php

    namespace PHP\Modelo\DAO;


    class Conecxao
    {
        public function conectar()
        {
            try{
                $conec = mysqli_connect('localhost','root','','fodase');
                if($conec){
                    echo "<br>Conectado com sucesso!";
                    return $conec;
                }else{
                    echo "<br>Se fudeu, não conectou!";
                }
            }catch(Exception $erro){
                echo $erro;
            }
        }//Fim da função conectar.
    }//Fim Conexão.
?>