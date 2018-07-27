<?php

namespace Tests\Unit;

use App\Message;
use App\Ticket;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TicketTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function it_has_pending_status_by_default()
    {
        $ticket = Ticket::create([
            'user_id' => 1,
            'name' => 'Test Name',
            'email' => 'foo@bar.com',
            'description' => 'Lorem ipsum',
            'source' => 'Foo'
        ]);
        $this->assertEquals('Pending', $ticket->status);
    }

    /** @test */
    public function it_has_messages()
    {
        $ticket = factory(Ticket::class)->create();
        $this->assertInstanceOf(Collection::class, $ticket->messages);
    }
}
