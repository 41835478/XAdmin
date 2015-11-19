<?php

namespace App\Repositories\Backend\Permission;

use App\Models\Permission;

class PermissionRepository implements PermissionContract
{

    /**
     * Create a new DbUserRepository instance.
     * @param Permission $album
     */
    public function __construct(Permission $album)
    {
        $this->model = $album;
    }

    /**
     * @param $id
     * @return mixed
     * @throws GeneralException
     */
    public function find($id) {
        $obj = $this->model->findOrNew($id);
        if (! is_null($obj)) return $obj;
        return array();
    }

    /**
     * @param $per_page
     * @param string $order_by
     * @param string $sort
     * @return \Illuminate\Pagination\Paginator
     */
    public function getAll($per_page, $order_by = 'id', $sort = 'desc') {
        return $this->model->orderBy($order_by, $sort)->paginate($per_page);
    }
}
