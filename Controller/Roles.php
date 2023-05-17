<?php

namespace Makkari\Controllers;

use Makkari\Controllers\Controller;
use Makkari\Models\Role;

require_once "./Model/Role.php";

class Roles extends Controller
{
    // /roles
    public static function index()
    {
        $view = new View(PAGES_PATH . "/roles");

        $roles = Role::getAll();

        $data = array(
            "roles" => $roles
        );
        $view->render("roles", $data);
    }
    // /roles/create
    public static function create()
    {
        $view = new View(PAGES_PATH . "/roles");
        $view->render("addfrm");
    }
    public static function edit($id)
    {
        $view = new View(PAGES_PATH . "/roles");
        $role = Role::getById($id);
        $data = array(
            "role" => $role
        );

        $view->render("editfrm", $data);
    }
    public static function save()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $data = array(
                "role_name" => self::clean($_POST['role']),
                "description" => self::clean($_POST['desc']),
            );

            $role = new Role(NULL, ...$data);

            if ($role->save()) {
                echo "Success";
            } else {
                echo "failed";
            }
        }
    }

    public static function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $data = array(
                "role_name" => self::clean($_POST['role']),
                "description" => self::clean($_POST['desc']),
            );

            $role = Role::getById($id);
            $role->setRole_name($data['role_name']);
            $role->setDescription($data['description']);

            if ($role->save()) {
                echo "Success";
            } else {
                echo "failed";
            }
        }
    }

    public static function confirm($id)
    {
        $view = new View(PAGES_PATH . "/roles");
        $role = Role::getById($id);

        $data = array(
            "id" => $role->getId()
        );

        $view->render("confirm", $data);
    }
    public static function delete($id)
    {
        $role = Role::getById($id);


        if ($role->remove()) {
            echo "Success";
        } else {
            echo "Failed";
        }
        //your delete code goes here
    }
}
