<?php

class Person
{
    private $_power = 1;
    private $_experience = 0;
    private $_degats = 0;
    private $_name;

    const LESS_POWER = 20;
    const AVERAGE_POWER = 50;
    const STRONG_POWER = 80;

    const LESS_EXPERIENCE = 10;
    const AVERAGE_EXPERIENCE = 40;
    const STRONG_EXPERIENCE = 80;

    private static $_textToSay = 'Hey, I can talk';
    private static $_rudeText  = 'You, mother fucker, I\'m gonna kill you ';

    public function __construct($nom, $power, $experience)
    {
        $this->_name = $nom;
        $this->_power = $power;
        $this->_experience = $experience;
    }

    public function hit(Person $personToHit)
    {
        $personToHit->beenHit($this);
    }

    public function setPower($power)
    {
        if (!is_int($power)) {
            trigger_error('La force du personnage doit nécessairement être un entier', E_USER_WARNING);
            return;
        }
        if (in_array($power, array(self::AVERAGE_POWER, self::LESS_POWER, self::STRONG_POWER))) {
            $this->_power = $power;
        }
    }

    public function setExperience($experience)
    {
        if (!is_int($experience)) {
            trigger_error('La force du personnage doit nécessairement être un entier', E_USER_WARNING);
            return;
        }
        if (in_array($experience, array(self::AVERAGE_POWER, self::LESS_POWER, self::STRONG_POWER))) {
            $this->_experience = $experience;
        }
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

    public static function talk()
    {
        return self::$_textToSay;
    }
    public static function beRude()
    {
        return self::$_rudeText;
    }
}
