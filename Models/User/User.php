<?php

namespace Models\User;


class User
{

    private $ID_User;
    private $First_Name;
    private $Last_Name;
    private $Email;
    private $Password;






    function __construct(array $datas)
    {
        foreach ($datas as $key => $value) {
            $this->$key = $value;
        }
    }

    /**
     * Get the value of ID_User
     */
    public function getIDUser()
    {
        return $this->ID_User;
    }

    /**
     * Set the value of ID_User
     */
    public function setIDUser($ID_User): self
    {
        $this->ID_User = $ID_User;

        return $this;
    }

    /**
     * Get the value of First_Name
     */
    public function getFirstName()
    {
        return $this->First_Name;
    }

    /**
     * Set the value of First_Name
     */
    public function setFirstName($First_Name): self
    {
        $this->First_Name = $First_Name;

        return $this;
    }

    /**
     * Get the value of Last_Name
     */
    public function getLastName()
    {
        return $this->Last_Name;
    }

    /**
     * Set the value of Last_Name
     */
    public function setLastName($Last_Name): self
    {
        $this->Last_Name = $Last_Name;

        return $this;
    }

    /**
     * Get the value of Email
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Set the value of Email
     */
    public function setEmail($Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    /**
     * Get the value of Password
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * Set the value of Password
     */
    public function setPassword($Password): self
    {
        $this->Password = $Password;

        return $this;
    }
}
