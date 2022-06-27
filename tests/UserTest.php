<?php

namespace Rabib\TestProject;

use PHPUnit\Framework\TestCase;

final class UserTest extends TestCase
{
    /**
     * Test constructor
     *
     * @return void
     */
    public function testClassConstructor()
    {
        $user = new User(32, 'Rabib', 'Sylhet, Bangladesh');
        $this->assertSame('Rabib', $user->name);
        $this->assertSame(32, $user->age);
        $this->assertEmpty($user->favorite_movies);
        // $this->assertEmpty($user->address);
    }

    // public function testTellName()
    // {
    //     $user = new User(32, 'Rabib');

    //     $this->assertIsString($user->tellName());
    //     $this->assertStringContainsStringIgnoringCase('rabib', $user->tellName());
    // }


    // public function testTellAddress()
    // {
    //     $user = new User(32, 'Rabib', 'Sylhet, Bangladesh');

    //     $this->assertIsString($user->tellAddress());
    //     $this->assertStringContainsStringIgnoringCase('sylhet, BD', $user->tellAddress());
    // }


    // public function testTellAge()
    // {
    //     $user = new User(32, 'Rabib', 'Sylhet, Bangladesh');

    //     $this->assertIsString($user->tellAge());
    //     $this->assertStringContainsStringIgnoringCase('32', $user->tellAge());
    // }

    // public function testAddFavoriteMovie()
    // {
    //     $user = new User(32, 'Rabib', 'Sylhet, Bangladesh');

    //     $this->assertTrue($user->addFavoriteMovie('Multiverse of Madness'));
    //     $this->assertContains('Multiverse of Madness', $user->favorite_movies);
    //     $this->assertCount(1, $user->favorite_movies);


    //     $this->assertTrue($user->addFavoriteMovie('Thor: Love and Thunder'));
    //     $this->assertContains('Thor: Love and Thunder', $user->favorite_movies);
    //     $this->assertCount(2, $user->favorite_movies);
    // }

    // public function testRemoveFavoriteMovie()
    // {
    //     $user = new User(32, 'Rabib', 'Sylhet, Bangladesh');

    //     $this->assertTrue($user->removeFavoriteMovie('Multiverse of Madness'));
    //     $this->assertNotContains('Multiverse of Madness', $user->favorite_movies);
    //     $this->assertCount(1, $user->favorite_movies);
    // }
}
