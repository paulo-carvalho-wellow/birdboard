<?php

namespace Tests\Unit;

use App\Models\Project;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    /** @test */
    public function it_has_a_path()
    {
        $this->withoutExceptionHandling();
        $project = Project::factory()->create();


       $this->assertEquals('/projects/' . $project->id, $project->path());
    }

    /** @test */
    public function it_belongs_to_an_owner()
    {
        $this->withoutExceptionHandling();
        $project = Project::factory()->create();


       $this->assertInstanceOf('App\Models\User', $project->owner);
    }
}
