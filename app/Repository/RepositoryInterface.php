<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;

interface RepositoryInterface
{
    public function findById(int $id);
}
