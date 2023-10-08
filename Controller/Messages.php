<?php

namespace Makkari\Controllers;

use Makkari\Controllers\Controller;
use Makkari\Models\Message;

require_once './Model/Message.php';

class Messages extends Controller
{
    public static function index() {
        // Your code here
        $messages = Message::getAll();
        $data = array(
            'messages' => $messages
        );
        $view = new View(PAGES_PATH . '/message');
        $view->render('view-messages', $data);
    }
    
    public static function read($id) {
        $message = Message::getById($id);

        if(!$message->getIs_read()){
            $message->setIs_read(1);
            $message->save();
        }

        $data = array(
            'message' => $message
        );

        

        $view = new View(PAGES_PATH . '/message');
        $view->render('read-messages', $data);
    }
}
