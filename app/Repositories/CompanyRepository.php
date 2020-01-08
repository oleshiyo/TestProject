<?php


namespace App\Repositories;

use App\Company as Model;

class CompanyRepository extends CoreRepository
{
    protected function getModelClass()
    {
        return Model::class;
    }

    public function getAll()
    {
        return $this->startConditions()->all();
    }

    public function getById($id)
    {
        return $this->startConditions()->find($id);
    }

    public function getAllWithPaginate($perPage = null)
    {
        $columns = ['id', 'name', 'description'];

        return $this->startConditions()->paginate($perPage, $columns);
    }
}
