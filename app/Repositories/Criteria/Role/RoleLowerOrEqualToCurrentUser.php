<?php namespace App\Repositories\Criteria\Role;

use Bosnadev\Repositories\Contracts\RepositoryInterface as Repository;
use Bosnadev\Repositories\Criteria\Criteria;

// TODO: Is this class needed?
class RoleLowerOrEqualToCurrentUser extends Criteria
{

    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * @param $model
     * @param Repository $repository
     *
     * @return mixed
     */
    public function apply($model, Repository $repository)
    {
        $model = $model->where('level', '<=', $this->user->getLevelMax());
        return $model;
    }

}
