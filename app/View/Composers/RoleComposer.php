<?php

namespace App\View\Composers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class RoleComposer
{
    protected $user;

    public function __construct()
    {
        $this->user = null;

        if (Auth::user()) {
            $this->user = User::find(Auth::user()->id);
        }
    }

    public function compose(View $view)
    {
        $view->with('is_user', $this->user);
    }
}
