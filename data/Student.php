<?php

class Student
{
    public string $id;
    public string $name;
    public int $value;
    private string $email;

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    // implementasi menghapus propertie yang tidak dapat di clone
    // dengan menggunakan function __clone
    public function __clone()
    {
        unset($this->email);
    }

    // berguna mengkonversi object menjadi sebuah string
    public function __toString()
    {
        return "Student id : $this->id, Name : $this->name, Value : $this->value";
    }

    // magic function __invoke berguna membuat object menjadi function
    public function __invoke(...$arguments): void
    {
        $join = join(",", $arguments);
        echo "Invoke Student With Arguments $join" . PHP_EOL;
    }
}
