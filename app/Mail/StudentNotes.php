<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class StudentNotes extends Mailable
{
    use Queueable, SerializesModels;
    public $title;
    public $notes;
    public $student_name;
    public $appid;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($title,$notes,$appid,$student_name)
    {
        $this->title = $title;
        $this->notes = $notes;
        $this->appid = $appid;
        $this->student_name  = $student_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.student_note');
    }
}
