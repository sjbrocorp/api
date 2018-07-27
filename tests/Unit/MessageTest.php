<?php

namespace Tests\Unit;

use App\Message;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MessageTest extends TestCase
{
    use DatabaseMigrations;
    /** @test */
    public function it_has_an_owner()
    {
        $message = factory(Message::class)->create();
        $this->assertInstanceOf(User::class, $message->owner);
    }
}
