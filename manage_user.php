<?php

include('config.php');
logincheck();

use Carbon\Carbon;

$message = [];
$title = "Create user";
$user = new User;
$categories = Category::all();

if (isset($_GET['id'])) {
    $title = "Edit user";
    $user = User::find($_GET['id']);
}

function parseExpDate($expdate) {

    $expdate = trim($expdate);

    if ($expdate == '0000-00-00' || empty($expdate)) {
        return '0000-00-00';
    }
    try {
        return Carbon::createFromFormat('m/d/Y', $expdate);
    } catch (InvalidArgumentException $e) {
        
    }
    try {
        return Carbon::createFromFormat('Y-m-d', $expdate);
    } catch (InvalidArgumentException $e) {
        
    }

    return '0000-00-00';
}

if (isset($_POST['submit'])) {

    $user->username = $_POST['username'];
    $user->password = $_POST['password'];
    $user->exp_date = $_POST['expdate'];
    $user->max_connections = $_POST['limit'];

    if (isset($_POST['expdate'])) {
        $user->exp_date = parseExpDate($_POST['expdate']);
    }


    $user->active = 0;
    if (isset($_POST['active'])) {
        $user->active = 1;
    }

    if (empty($_POST['username'])) {
        $message['type'] = "error";
        $message['message'] = "username field is empty";
    } else if (empty($_POST['password'])) {
        $message['type'] = "error";
        $message['message'] = "password is empty";
    } else if (empty($_POST['category'])) {
        $message['type'] = "error";
        $message['message'] = "Select one category";
    } else {
        if (isset($_GET['id'])) {
            $message['type'] = "success";
            $message['message'] = "User saved";
            $user->save();
            $user->categories()->sync($_POST['category']);
        } else {
            $exists = User::where('username', '=', $_POST['username'])->get();

            if (count($exists) > 0) {
                $message['type'] = "error";
                $message['message'] = "Username already in use";
            } else {
                $message['type'] = "success";
                $message['message'] = "User created";
                $user->save();
                $user->categories()->sync($_POST['category']);
                redirect("manage_user.php?id=" . $user->id, 2000);
            }
        }
    }
}

echo $template->view()
        ->make('manage_user')
        ->with('user', $user)
        ->with('categories', $categories)
        ->with('message', $message)
        ->with('title', $title)
        ->render();
