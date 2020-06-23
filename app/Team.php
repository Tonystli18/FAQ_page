<?php

namespace App;

use Exception;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable =['name', 'size'];

    public function addMembers($users)
    {
        $this->guardAgainstTooManyMembers($users);

        $method = $users instanceof User? 'save': 'saveMany';

        $this->members()->$method($users);
    }

    public function removeMember(User $user = null)
    {
        return $user->update(['team_id' => null]);
    }

    public function removeManyMembers($users)
    {
        $this->members()
            ->whereIn('id', $users->pluck('id'))
            ->update(['team_id' => null]);
    }

    public function restart()
    {
        return $this->members()->update(['team_id' => null]);
    }

    public function size()
    {
        return $this->members()->count();
    }

    public function members()
    {
        return $this->hasMany(User::class);
    }

    protected function guardAgainstTooManyMembers($users)
    {
        $numUsersToAdd = ($users instanceof User)? 1 : count($users);

        $newTeamSize = $this->size() + $numUsersToAdd;

        if ($newTeamSize > $this->size)
        {
            throw new \Exception('Exception');
        }
    }
}
