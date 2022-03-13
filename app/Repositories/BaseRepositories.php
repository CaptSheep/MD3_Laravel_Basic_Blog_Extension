<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\impl\BaseInterface;

abstract  class  BaseRepositories implements BaseInterface
{
    protected $model;
    public function __construct()
    {
        $this->model = $this->getModel();
    }

    public abstract function getModel();

    public function getAll()
    {
      return $this->model->all();
    }

    public function getById($id)
    {
       return $this->model->findoOrFail($id);
    }

    public function deleteBId($id)
    {
        return $this->model->destroy($id);
    }
}
