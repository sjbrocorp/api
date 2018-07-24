<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use DatabaseMigrations;
    /** @test */
    public function it_has_tickets()
    {
        $user = factory(User::class)->create();
        $this->assertInstanceOf(Collection::class, $user->tickets);
    }
}
