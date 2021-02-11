<?php

namespace App\Cooking;

class Ingredient
{
    private $ingredient;
    private $dietaryInfo;

    public function __construct($ingredient, $dietaryInfo)
    {
        $this->ingredient = $ingredient;
        $this->dietaryInfo = collect($dietaryInfo);
    }

    public function name()
    {
        return $this->ingredient;
    }

    public function vegan()
    {
        return !$this->dietaryInfo->contains("animal produce");
    }
}