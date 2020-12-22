<?php

namespace Saurabh85mahajan\ChuckNorrisJokes\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\HandlerStack;

use PHPUnit\Framework\TestCase;
use Saurabh85mahajan\ChuckNorrisJokes\JokeFactory;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke()
    {
        $mock = new MockHandler([
            new Response(200, [], '{ "type": "success", "value": { "id": 464, "joke": "&quot;It works on my machine&quot; always holds true for Chuck Norris.", "categories": ["nerdy"] } }'),
        ]);
        
        $handler = HandlerStack::create($mock);
        $client = new Client(['handler' => $handler]);

        $jokes = new JokeFactory($client);
        $joke = $jokes->getRandomJoke();

        $this->assertSame('&quot;It works on my machine&quot; always holds true for Chuck Norris.', $joke);
    }
}
