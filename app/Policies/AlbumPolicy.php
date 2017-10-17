<?php

namespace App\Policies;

use App\User;
use App\Album;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class AlbumPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function viewAlbum($user, Album $album)
    {

        return $user->id == $album->user_id;
    }
}
