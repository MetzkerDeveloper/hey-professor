<?php

use App\Models\User;

function user(): ?User
{
    return auth()->check() ? auth()->user() : null;

}
