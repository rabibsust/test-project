<?php

namespace Rabib\TestProject;

use InvalidArgumentException;

class User
{
    public int $age;
    public array $favorite_movies = [];
    public string $name;
    public string $address;

    /**
     * @param int $age
     * @param string $name
     * @param string $address
     */
    public function __construct(int $age, string $name, string $address)
    {
        $this->age = $age;
        $this->name = $name;
        $this->address = $address;
    }

    public function tellName(): string
    {
        return "My name is " . $this->name . ".";
    }

    public function tellAge(): string
    {
        return "I am " . $this->age . " years old.";
    }

    public function tellAddress(): string
    {
        return "Here is my address: " . $this->address;
    }

    public function addAddress(string $address): bool
    {
        $this->address = $address;
        return true;
    }

    public function addFavoriteMovie(string $movie): bool
    {
        $this->favorite_movies[] = $movie;
        return true;
    }

    public function removeFavoriteMovie(string $movie): bool
    {
        if (!in_array($movie, $this->favorite_movies)) throw new InvalidArgumentException("Unknown movie: " . $movie);
        unset($this->favorite_movies[array_search($movie, $this->favorite_movies)]);
        return true;
    }
}
