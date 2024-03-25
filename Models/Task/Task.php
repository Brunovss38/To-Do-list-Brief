<?php

namespace Models\Task;

class Task
{
    private $id_Task;
    private $name;
    private $Description;
    private $Date;
    private $ID_User;
    private $ID_Priority;

    function __construct(array $datas)
    {
        foreach ($datas as $key => $value) {
            $this->$key = $value;
        };
    }



    /**
     * Get the value of id_Task
     */
    public function getId_Task()
    {
        return $this->id_Task;
    }

    /**
     * Set the value of id_Task
     *
     * @return  self
     */
    public function setId_Task($id_Task)
    {
        $this->id_Task = $id_Task;

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
     * Get the value of Description
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Set the value of Description
     *
     * @return  self
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;

        return $this;
    }

    /**
     * Get the value of Date
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * Set the value of Date
     *
     * @return  self
     */
    public function setDate($Date)
    {
        $this->Date = $Date;

        return $this;
    }

    /**
     * Get the value of ID_User
     */
    public function getID_User()
    {
        return $this->ID_User;
    }

    /**
     * Set the value of ID_User
     *
     * @return  self
     */
    public function setID_User($ID_User)
    {
        $this->ID_User = $ID_User;

        return $this;
    }

    /**
     * Get the value of ID_Priority
     */
    public function getID_Priority()
    {
        return $this->ID_Priority;
    }

    /**
     * Set the value of ID_Priority
     *
     * @return  self
     */
    public function setID_Priority($ID_Priority)
    {
        $this->ID_Priority = $ID_Priority;

        return $this;
    }
}
