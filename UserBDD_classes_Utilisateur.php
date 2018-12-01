<?php
/**
 * Created by PhpStorm.
 * User: RIM
 * Date: 28/11/2018
 * Time: 14:59
 */
class Utilisateur{
    private $cin;
    private $name;
    private $firstname;
    private $age;
    private $bd;

    /**
     * Utilisateur constructor.
     * @param $cin
     * @param $name
     * @param $firstname
     * @param $age
     */
    public function __construct($cin=0, $name=null, $firstname=null, $age=0)
    {
        $this->cin = $cin;
        $this->name = $name;
        $this->firstname = $firstname;
        $this->age = $age;
        $this->bd = ConnexionBDD::getInstance();
    }


    /**
     * @return mixed
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param mixed $cin
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }



    public function addUser($cin,$nom,$prenom,$age){
        $query = "INSERT INTO utilisateur (cin,nom,prenom,age) VALUES (:cin, :nom, :prenom, :age)";
        $response = $this->bd->prepare($query);
        $response->execute(
            array(
                'cin'=>$cin,
                'nom'=>$nom,
                'prenom'=>$prenom,
                'age'=>$age,
            )
        );
        return $response->fetch(PDO::FETCH_OBJ);
    }


    public function findAll() {
        $query = " select * from utilisateur";
        $response = $this->bd->prepare($query);
        $response->execute();
        return $response->fetchAll(PDO::FETCH_OBJ);
    }

    public function findByCin($cin) {
        $query = " select * from utilisateur where cin=:cin";
        $response = $this->bd->prepare($query);
        $response->execute(
            array(
                'cin'=> $cin
            )
        );
        return $response->fetch(PDO::FETCH_OBJ);
    }

    public function updateUser($cin,$nom,$prenom,$age){
        $query = "UPDATE `utilisateur` SET `nom` = '$nom',`prenom` = '$prenom', `age` = '$age'  WHERE `utilisateur`.`cin` = '$cin'";
        $response = $this->bd->prepare($query);
        $response->execute(
            array(
                'cin'=>$cin,
                'nom'=>$nom,
                'prenom'=>$prenom,
                'age'=>$age,
        ));
        return $response->fetchAll(PDO::FETCH_OBJ);
    }

    public function deleteUser($cin) {
        $query = " delete from utilisateur where cin=:cin";
        $respone = $this->bd->prepare($query);
        $respone->execute(
            array(
                'cin'=> $cin
            )
        );
    }

}