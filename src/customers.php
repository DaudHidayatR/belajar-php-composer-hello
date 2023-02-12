<?php
namespace Daudhidayatramadhan\Belajar;

class Customers
{
    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name): string
    {
        return "hello $name, MyName is $this->name";
    }
}