<?php

namespace App\Http\Controllers;

use Mail;
use App\Http\Controllers\Controller;

class MailController extends Controller {

    public function basic_email($name, $toemail, $fromemail, $subject, $body) {
        $data = array('name' => $name);
        $this->name = $name;
        $this->toemail = $toemail;
        $this->fromemail = $fromemail;
        $this->subject = $subject;
        $this->body = $body;
        
        
        Mail::send(['text' => 'mail'], $data, function($message) {
            $message->to($this->toemail, 'welcome')->subject($this->subject);
            $message->from($this->fromemail, $this->name);
            $message->setBody($this->body, 'text');
        });

        return "mail sent";
    }

}
