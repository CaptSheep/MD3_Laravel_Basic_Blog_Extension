<?php

namespace App\Repositories\impl;

use http\Env\Request;
interface BaseInterface
{
    public function getAll();

    public function getById($id);

    public function deleteById($id);
}
