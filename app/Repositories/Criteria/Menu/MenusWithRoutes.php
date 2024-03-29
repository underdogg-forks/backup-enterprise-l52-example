<?php namespace App\Repositories\Criteria\Menu;

use Bosnadev\Repositories\Contracts\RepositoryInterface as Repository;
use Bosnadev\Repositories\Criteria\Criteria;

class MenusWithRoutes extends Criteria
{


    /**
     * @param $model
     * @param Repository $repository
     *
     * @return mixed
     */
    public function apply($model, Repository $repository)
    {
        $model = $model->with('routes');
        return $model;
    }

}
