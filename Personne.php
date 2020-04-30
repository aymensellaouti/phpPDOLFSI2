<?php


class Personne
{
    protected $name;
    protected $age;

    /**
     * Personne constructor.
     * @param $name
     * @param $age
     */
    public function __construct($name = '', $age = 20)
    {
        $this->name = $name;
        $this->age = $age;
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
    public function setName($name): void
    {
        $this->name = $name;
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
    public function setAge($age): void
    {
        if($age > 150 && $age < 0) {
           echo 'L age ne peut pas dépasser 120 ans et ne peut pas etre négatif';
        } else {
            $this->age = $age;
        }
    }

    public function sePresenter() {
        echo "Bonjour je suis". $this->name."et j'ai ".$this->age." ans";
    }

}