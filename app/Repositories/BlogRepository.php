<?php

namespace App\Repositories;
use App\Models\Blog;
use App\Users;
use App\Repositories\Interfaces\BlogRepositoryInterface;

class BlogRepository  implements BlogRepositoryInterface
{
    public function all(){

        return BLog::all();

    }

    public function getByUser(User $user){

        return Blog::where('user_id'. $user->id)->get();

    }

}
