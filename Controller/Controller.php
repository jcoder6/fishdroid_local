<?php

namespace Makkari\Controllers;

require_once("./Config/config.php");
class Controller
{
    public static function clean($str)
    {
        $str = trim($str);
        $str = stripslashes($str);
        $str = htmlspecialchars($str);
        return $str;
    }

    public static function generateDocumentCode($length = 10)
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $charactersLength = strlen($characters);
        $documentCode = '';

        for ($i = 0; $i < $length; $i++) {
            $documentCode .= $characters[random_int(0, $charactersLength - 1)];
        }

        return $documentCode;
    }

    public static function createNotif($msg, $type)
    {
        $str = "";
        if ($type == 1) {
            $str = '<div id="notif" class="notif bg-blue-500 text-white px-4 py-2 rounded shadow-md fixed bottom-4 right-4">
            <div class="flex items-center justify-between">
                <span>' . $msg . '</span>
                <button id="dismiss-btn" class="text-white ml-4">
                    &times;
                </button>
            </div>
        </div>';
        } else {
            $str = '<div id="notif" class="notif bg-red-500 text-white px-4 py-2 rounded shadow-md fixed bottom-4 right-4">
            <div class="flex items-center justify-between">
                <span>' . $msg . '</span>
                <button id="dismiss-btn" class="text-white ml-4">
                    &times;
                </button>
            </div>
            </div>';
        }
        $_SESSION['notif'] = $str;
    }
    public static function checkAuth()
    {
        if (!isset($_SESSION['user_id'])) {
            header("Location: /login");
        }
    }
    public static function isLogedIn()
    {
        if (isset($_SESSION['user_id'])) {
            header("Location: /");
        }
    }
    public static function csrfToken()
    {
        $token = bin2hex(random_bytes(32));
        $_SESSION['csrf_token'] = $token;
    }
}
