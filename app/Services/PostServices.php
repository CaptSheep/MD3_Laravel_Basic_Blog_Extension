<?php

namespace App\Services;



use App\Repositories\PostRepository;

class PostServices
{
public $postRepository;
public function __construct(PostRepository $postRepository)
{
    $this->postRepository = $postRepository;
}
}
