<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FirstMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
//            ->attach(storage_path('app/public/1.jpg'), ['as' =>'image_name.jpg'])  first method
//                ->attachFromStorage('public/1.jpg','name')     second method
                ->attachFromStorageDisk('public','1.jpg','nam') // third method

            ->subject('Fist my email')
            ->view('mails.firstMail');
    }
}
