<?php

namespace Tests\Unit;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function it_has_projects()
    {
        $user = \App\Models\User::factory()->create();
        $this->assertInstanceOf(Collection::class, $user->projects);
    }
}
