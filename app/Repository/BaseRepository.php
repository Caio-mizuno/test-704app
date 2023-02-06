<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;

class BaseRepository implements RepositoryInterface
{
    public function findById(int $modelId, array $columns = ['*'])
    {
        return $this->model->newQuery()
        ->select($columns)
        ->where('id', $modelId)
        ->first();
    }
    
}
