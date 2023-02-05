<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;

class BaseRepository implements RepositoryInterface
{
    private $model;
    public function __construct(Model $model){
        $this->model = $model;
    }
    public function findById(int $modelId, array $columns = ['*']): ?Model
    {
        return $this->model->newQuery()
            ->select($columns)
            ->where('id', $modelId)
            ->first();
    }
    public function findByPlate(string $plateNumber, array $columns = ['*']): ?Model
    {
        return $this->model->newQuery()
            ->select($columns)
            ->where('plate', $plateNumber)
            ->first();
    }
}
