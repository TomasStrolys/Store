<?php

namespace app\model;


use app\model\interfaces\destroyable;
use app\model\interfaces\Manageable;

class User extends CoreModel implements Manageable, destroyable
{

    protected $table ='store_users';

    public function create(array $data)
    {
        $query = $this->generateQuery( $data, true);
        print_r($this->query($query));
    }
    public function destroy()
    {
        // TODO: Implement destroy() method.
    }
}