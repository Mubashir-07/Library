<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BorrowBookMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $customer;
    public $book;
    public $transaction;

    public function __construct($customer, $book, $transaction)
    {
        $this->customer = $customer;
        $this->book = $book;
        $this->transaction = $transaction;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // dd($this->transaction);
        return $this->view('Mail.Borrowbook', ['customer' => $this->customer], ['book' => $this->book], ['transaction' => $this->transaction]);
    }
}
