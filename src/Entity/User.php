<?php

namespace App\Mvc\Entity;

class User
{
    private int $id;
    private string $name;
    private string $age;

    public function __construct($id, $name, $age)
    {
        $this->setId($id);
        $this->setName($name);
        $this->setAge($age);
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAge(): string
    {
        return $this->age;
    }

    public function setAge(string $age): void
    {
        $this->age = $age;
    }
}
