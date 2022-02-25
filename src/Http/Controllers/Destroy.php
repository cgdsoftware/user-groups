<?php

namespace LaravelEnso\UserGroups\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\UserGroups\Models\UserGroup;

class Destroy extends Controller
{
    public function __invoke(UserGroup $userGroup)
    {
        $userGroup->delete();

        return [
            'message'  => __('The user group was successfully deleted'),
            'redirect' => 'administration.userGroups.index',
        ];
    }
}
