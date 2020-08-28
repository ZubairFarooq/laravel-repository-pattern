<?php

namespace App\Repositories\Interfaces;
use App\User;

interface BLogRepositoryInterface{

    public function all();

    public function getByUser(User $user);

}
