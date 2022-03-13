<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\impl\BaseInterface;

class PostRepository extends BaseRepositories implements BaseInterface
{

    public function getModel()
    {
        // TODO: Implement getModel() method.
        return Post::class;
    }

    public function deleteById($id)
    {
        // TODO: Implement deleteById() method.
    }
}
