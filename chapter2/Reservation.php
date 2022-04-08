<?php

class Reservation
{
    private $host = " Host Class"; // The host class
    private $guest = "Guest Class"; // The guest class
    
    // Cancel 
    public function cancel()
    {
        // Check whether the cancellation is an option 
        // Refund guest... if refunds applicable [Guest] 
        // Make room available again [Room]
        // Notify the host [Host]
            // In app notification [Notification]
            // Send them Email/SMS [Email, SMS]

        $this->sendCancellationNotification();
        $this->refundGuest();

        echo "And a load of other stuff that you don't need to know about";

    }

    private function sendCancellationNotification()
    {
        echo 'Sending cancellation to ' . $this->host . '<br>';
    }

    private function refundGuest()
    {
        echo 'Refunding ' . $this->guest . '<br>';
    }
}