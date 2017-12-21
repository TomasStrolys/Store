<?php

namespace app;


class Store
{
    public function __construct()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $view = $_GET['view'];
        $action = $_GET['action'];

        if ($method == 'GET') {
            switch ($view) {
                case 'user';

                    if ($action == 'new')
                        (new UserController())->create();
                    elseif ($action == 'list')
                        (new UserController())->list();
                    elseif ($action == 'edit')
                        (new UserController())->edit();

            }
        }
        elseif ($method == 'POST') {


            switch ($view) {
                case 'user';

                    if ($action == 'create')
                        (new UserController())->store();

                    if ($action == 'update')
                        (new UserController())->update();
                    if ($action == 'delete')
                        (new UserController())->delete();
                    break;
            }
        }
    }
}