<?php

namespace App\Http\Controllers;
use App\Messages\AfricasTalkingGateway;


class MessageController extends Controller{
    public function test(){
        // Set your app credentials
        $username   = "sandbox";
        $apiKey     = "8ca8f089c985233ce4f8f248892073e1f02e4069c6012edf96b62d4ce2fd18a8";

        $sms         = new AfricasTalkingGateway($username, $apiKey);


        // Set the numbers you want to send to in international format
        $recipients = "+254720655526";

        // Set your message

        $message    = "You have booked an Apartment. Please contact us on this number for steps forward 0771660006";

        try {
            // Thats it, hit send and we'll take care of the rest
            $result = $sms->sendMessage($recipients, $message);
//            $update->sent = "Yes";
////            $update->save();

            //print_r($result);
            return redirect('/rooms')->with('success', 'Update successfully sent');
        } catch (Exception $e) {
            echo "Error: ".$e->getMessage();
        }
    }

}