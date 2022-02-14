<?php


namespace App\classes;


class Home
{
    protected $firstNumber;
    protected $lastNumber;
    protected $i;
    protected $result;

    public function __construct($data=null)
    {
        $this->firstNumber = $data['first_number'];
        $this->lastNumber = $data['last_number'];
    }

    public function index()
    {
        header('Location: action.php?pages=search');
    }

    public function primeNumber()
    {
        if ($this->number == 1 || $this->number == 2)
        {
            return "This number $this->number is prime";
        }
        else
        {
            for ($this->i = 2; $this->i < $this->number; $this->i++)
            {
                if ($this->number % $this->i == 0)
                {
                    return "This number $this->number is not Prime";
                }
            }
        }
        return "This number $this->number is Prime";
    }
}




























