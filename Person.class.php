<?php

class Person
{
    private $_power = 1;
    private $_experience = 0;
    private $_degats = 0;
    private $_name;

    public function __construct(string $nom)
    {
        $this->_name = $nom;
    }


    public function hit(Person $personToHit)
    {
        $personToHit->beenHit($this);
        $this->gainExperience();
    }

    public function gainPower($power)
    {
        if ($power == null) {
            $this->_power += 1;
        } 
        else if (! is_int($power)) {
            trigger_error('La force du personnage doit nécessairement être un entier', E_USER_WARNING);
            return;
        }
         else $this->_power += $power;

        $this->gainExperience();
    }

    public function gainExperience()
    {
        $this->_experience += 1;
    }

    public function beenHit($hitter)
    {
        $this->_degats += ($hitter->_power / $this->_power);
    }

    public function getStatus()
    {
        return ['force' => $this->_power, 'experiece' => $this->_experience, 'degats' => $this->_degats];
    }

    public function setName($name)
    {
        $this->_name = $name;
    }

    public function getName()
    {
        return $this->_name;
    }
}
$person = new Person('kfkf');
// export(Person());
