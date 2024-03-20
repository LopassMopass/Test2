<?php

class User
{
    public string $type;
    public string $name;

    public function __construct(string $type, string $name)
    {
        $this -> type = $type;
        $this -> name = $name;
    }

    public function setType(string $type): void
    {
        $this -> type = $type;
    }

    public function getType(): string
    {
        return $this -> type;
    }

    public function setName(string $name): void
    {
        $this -> name = $name;
    }

    public function getName(): string
    {
        return $this -> name;
    }

    public function __toString(): string
    {
        return $this -> type .": ". $this -> name;
    }
}
