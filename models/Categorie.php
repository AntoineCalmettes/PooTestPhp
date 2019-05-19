<?php 

class Categorie{

    private $_id;
    private $_name;
    private $_position;

    //CONSTRUCTEUR 

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    // HYDRATATION

    public function hydrate(array $data){

        foreach($data as $key => $value){

            $method = 'set'.ucfirst($key);

            if(method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }

    //SETTERS 

    public function setId($id){
        $id = (int) $id;

        if($id > O){
            $this->_id =$id;
        }
    }

    public function setName($name){

        if(is_string($name)){
            $this->_title = $name;
        }
    }

    public function setPosition($position){
        $position = (int) $position;

        if($position > O){
            $this->_position =$position;
        }
    }

    //GETTERS

    public function getId(){

        return $this->_id;
    }

    public function getName(){
        return $this->_name;
    }

    public function getPosition(){
        return $this->_position;
    }
}