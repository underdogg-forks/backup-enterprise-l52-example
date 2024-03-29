<?php namespace App\Repositories\Criteria\Error;

use Bosnadev\Repositories\Contracts\RepositoryInterface as Repository;
use Bosnadev\Repositories\Criteria\Criteria;

class ErrorByCreatedDateDescending extends Criteria
{


    /**
     * @param $model
     * @param Repository $repository
     *
     * @return mixed
     */
    public function apply($model, Repository $repository)
    {
        $model = $model->orderBy('created_at', 'DESC');
        return $model;
    }

}
