<?php

namespace Tests\Unit;

use App\Ticket;
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
            'description' => 'Lorem ipsum'
        ]);
        $this->assertEquals('Pending', $ticket->status);
    }
}
