<?php

abstract class Model
{ 
    private static $_bdd;


    //INSTANCIE LA CONNEXION A LA BDD
    private static function setBdd(){

        self::$_bdd = new PDO('mysql:host=localhost;dbname=testPhpPoo;charset=utf8','root','');

        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    // RECUPERE LA CONNEXION A LA BDD

    protected function getBdd(){
        if(self::$_bdd ==null){

            self::setBdd();
            return self::$_bdd;

        }
    }

    protected function getAll($table, $obj){
        $array = [];
        $req = $this->getBdd()->prepare('SELECT  * FROM '.$table.' ORDER BY id desc');
        $req->execute();

        while($data = $req->fetch(PDO::FETCH_ASSOC)){

            $array = new $obj($data);

        }
        return $array;
        $req->closeCursor();
    }
}
