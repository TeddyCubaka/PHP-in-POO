<?php

class Character
{
    private $_ID;
    private $_name;
    private $_power;
    private $_damage;
    private $_level;
    private $_experience;

    public function __construct(array $datas)
    {
        $this->hydrate($datas);
    }

    public function ID()
    {
        return $this->_ID;
    }
    public function name()
    {
        return $this->_name;
    }
    public function power()
    {
        return $this->_power;
    }
    public function damage()
    {
        return $this->_damage;
    }
    public function level()
    {
        return $this->_level;
    }
    public function experience()
    {
        return $this->_experience;
    }

    public function setID($ID)
    {
        $ID = (int) $ID;
        if ($ID > 0) {
            $this->_ID = $ID;
        }
    }
    public function setName($name)
    {
        if (is_string($name))
            $this->_name = $name;
    }
    public function setPower($power)
    {
        $power = (int) $power;
        if ($power >= 1 && $power <= 100) {
            $this->_power = $power;
        }
    }
    public function setDamage($damage)
    {
        $damage = (int) $damage;
        if ($damage >= 1 && $damage <= 100) {
            $this->_damage = $damage;
        }
    }
    public function setLevel($level)
    {
        $level = (int) $level;
        if ($level >= 1 && $level <= 100) {
            $this->_level = $level;
        }
    }
    public function setExperience($experience)
    {
        $experience = (int) $experience;
        if ($experience >= 1 && $experience <= 100) {
            $this->_experience = $experience;
        }
    }

    public function hydrate(array $datas)
    {
        foreach ($datas as $keys => $values) {
            $method = 'set' . ucfirst($keys);
            if (method_exists($this, $method)) {
                $this->$method($values);
            }
        }
    }
}
