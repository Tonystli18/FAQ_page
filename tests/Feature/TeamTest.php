<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Team;
use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TeamTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function a_team_has_a_name()
    {
        $team = new Team(['name' => 'Acme']);

        $this->assertEquals('Acme', $team->name);
    }
    /**
     * @test
     */
    public function a_team_can_add_members()
    {
        $team = factory(Team::class)->create();

        $user = factory(User::class)->create();
        $userTwo = factory(User::class)->create();

        $team->addMembers($user);
        $team->addMembers($userTwo);

        $this->assertEquals(2, $team->size());
    }

    /**
     * @test
     */
    public function a_team_has_a_maximam_size()
    {
        $team = factory(Team::class)->create(['size' => 2]);

        $user = factory(User::class)->create();
        $userTwo = factory(User::class)->create();
        $userThree = factory(User::class)->create();

        $team->addMembers($user);
        $team->addMembers($userTwo);

        $this->expectExceptionMessage('Exception');

        $team->addMembers($userThree);
    }

    /**
     * @test
     */
    public function a_team_can_add_multiple_members()
    {
        $team = factory(Team::class)->create(['size' => 6]);

        $users = factory(User::class, 3)->create();

        $team->addMembers($users);

        $this->assertEquals(3, $team->size());
    }


    /**
     * @test
     */
    public function a_team_can_remove_a_member()
    {
        $team = factory(Team::class)->create(['size' => 3]);

        $users = factory(User::class, 3)->create();

        $team->addMembers($users);

        $team->removeMember($users[0]);

        $this->assertEquals(2, $team->size());
    }

    /**
     * @test
     */
    public function a_team_can_remove_all_members_at_once()
    {
        $team = factory(Team::class)->create(['size' => 3]);

        $users = factory(User::class, 3)->create();

        $team->addMembers($users);

        $team->restart();

        $this->assertEquals(0, $team->size());
    }

    /**
     * @test
     */
    public function a_team_can_remove_more_than_one_members_at_once()
    {
        $team = factory(Team::class)->create(['size' => 3]);

        $users = factory(User::class, 3)->create();

        $team->addMembers($users);

        $team->removeManyMembers($users->slice(0, 2));

        $this->assertEquals(1, $team->size());
    }
}
