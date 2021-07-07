<?php 

namespace App\Core;

class Model {

    //vamos aplicar o padrão Singleton
    private static $conexao;

    public static function getConexao(){
// se a conexão não estiver criada, vamos criar ela
        if(!isset($conexao)){
        self::$conexao = new \PDO("mysql:host=localhost;port=3306;dbname=icatalogo;", "root", "bcd127");
        }

        //retomamos a conexão
        return self::$conexao;

    }
}