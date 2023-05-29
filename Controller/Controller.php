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

    public static function renameImg($imageCurrentName, $imgCustomName) {
        # GET THE EXTENSION NAME OF THE CURRENT IMAGE
        $ext = explode('.', $imageCurrentName);
        $ext = '.' . end($ext);
      
        # GENERATE THE NEW NAME WITH THE CUSTOM NAME
        $newName = $imgCustomName . '_' . random_int(000, 999) . $ext;
        return $newName;
      }
      
      public static function deleteCurrentImg($imgName, $imgPath) {
        $isImg = $imgName != 'Image is not currently available' && $imgName != '';
        if ($isImg) {
          if (file_exists($imgPath)) {
            echo 'img-deleted';
            unlink($imgPath);
          } else {
            echo 'file does not exist';
          }
        }
      }
      
      public static function uploadNewImage($sourcePath, $destinationPath, $pdo, $query, $data) {
        if(move_uploaded_file($sourcePath, $destinationPath)) {
          $stmt = $pdo->prepare($query);
          $stmt->execute($data);
        }
      }

      public static function uploadImageDirectory($sourcePath, $destinationPath){
        #upload the image in to our file folder
        # 1. get the source path
        // $sourcePath = $_FILES['event_photo']['tmp_name'];
        // echo $sourcePath;
        # 2. get the desitnation path
        // $destinationPath = '../assets/images/events/' . $imgNewName;
        # 3. upload the image
        if (!move_uploaded_file($sourcePath, $destinationPath)) {
            return 'file not uploaded';
        } else {
            return 'file uploaded';
        }
      }

      function messageNotif($messagetype, $message) {
        $_SESSION['msg'] = '<div class="message" data-messageType=' . $messagetype . '>' . $message . '</div>';
      }

      public static function showMessage() {
        if (isset($_SESSION['msg'])) {
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
        }
      }
}
