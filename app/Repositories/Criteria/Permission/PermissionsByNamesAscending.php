<?php namespace App\Repositories\Criteria\Permission;

use Bosnadev\Repositories\Contracts\RepositoryInterface as Repository;
use Bosnadev\Repositories\Criteria\Criteria;

class PermissionsByNamesAscending extends Criteria
{


    /**
     * @param $model
     * @param Repository $repository
     *
     * @return mixed
     */
    public function apply($model, Repository $repository)
    {
        $model = $model->orderBy('name', 'ASC');
        return $model;
    }

}
