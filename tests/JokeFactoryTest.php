<?php

namespace Saurabh85mahajan\ChuckNorrisJokes\Tests;

use PHPUnit\Framework\TestCase;
use Saurabh85mahajan\ChuckNorrisJokes\JokeFactory;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke()
    {
        $jokes = new JokeFactory([
            'This is a joke',
        ]);
        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke', $joke);
    }

    /** @test */
    public function it_returns_a_predefined_joke()
    {
        $chuckNorrisjokes = [
            'Chuck Norris can strangle you with a cordless phone',
            'Chuck Norris doesn\'t wear a watch. He decides what time it is.',
            'Chuck Norris tells Simon what to do.',
            'Chuck Norris makes onions cry.',
        ];
        $jokes = new JokeFactory();
        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $chuckNorrisjokes);
    }
}
