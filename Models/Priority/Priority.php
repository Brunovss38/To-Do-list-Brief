<?php

namespace Models\Product;

class Priority
{
    private $ID_Priority;
    private $Name;

    function __construct(array $datas)
    {
        foreach ($datas as $key => $value) {
            $this->$key = $value;
        };
    }


    /**
     * Get the value of ID_Priority
     */
    public function getIDPriority()
    {
        return $this->ID_Priority;
    }

    /**
     * Set the value of ID_Priority
     */
    public function setIDPriority($ID_Priority): self
    {
        $this->ID_Priority = $ID_Priority;

        return $this;
    }

    /**
     * Get the value of Name
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Set the value of Name
     */
    public function setName($Name): self
    {
        $this->Name = $Name;

        return $this;
    }
}
