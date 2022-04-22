<?php

namespace App\Models;

use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Contracts\Queue\Factory as Queue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model implements \Illuminate\Contracts\Mail\Mailable
{
    use HasFactory;
    protected $guarded=[];

    public function send($mailer)
    {
        // TODO: Implement send() method.
    }

    public function queue(Queue $queue)
    {
        // TODO: Implement queue() method.
    }

    public function later($delay, Queue $queue)
    {
        // TODO: Implement later() method.
    }

    public function cc($address, $name = null)
    {
        // TODO: Implement cc() method.
    }

    public function bcc($address, $name = null)
    {
        // TODO: Implement bcc() method.
    }

    public function to($address, $name = null)
    {
        // TODO: Implement to() method.
    }

    public function locale($locale)
    {
        // TODO: Implement locale() method.
    }

    public function mailer($mailer)
    {
        // TODO: Implement mailer() method.
    }
}
