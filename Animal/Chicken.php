<?php


class Chicken extends Animal implements Edible
{
public function makeSound()
{
    return "Chicken: cluck-cluck!";
}
    public function howtoEat()
    {
        return "could be fried";
    }


}