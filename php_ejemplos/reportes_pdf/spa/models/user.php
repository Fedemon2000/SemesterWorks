<?php
class user{
    public $ncontrol, $name, $table='users';

    public function __contruct($ncontrol=null,$name=null){

        $this->ncontrol = $ncontrol;
        $this->name = $name;
    }

    /**
     * Get the value of ncontrol
     */ 
    public function getNcontrol()
    {
        return $this->ncontrol;
    }

    /**
     * Set the value of ncontrol
     *
     * @return  self
     */ 
    public function setNcontrol($ncontrol)
    {
        $this->ncontrol = $ncontrol;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of table
     */ 
    public function getTable()
    {
        return $this->table;
    }

    /**
     * Set the value of table
     *
     * @return  self
     */ 
    public function setTable($table)
    {
        $this->table = $table;

        return $this;
    }
}