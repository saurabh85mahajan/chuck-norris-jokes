<?php

namespace Saurabh85mahajan\ChuckNorrisJokes;

class JokeFactory
{
    protected $jokes = [
        'Chuck Norris can strangle you with a cordless phone',
        'Chuck Norris doesn\'t wear a watch. He decides what time it is.',
        'Chuck Norris tells Simon what to do.',
        'Chuck Norris makes onions cry.',
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
