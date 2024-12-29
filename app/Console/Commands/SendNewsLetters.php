<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class SendNewsLetters extends Command
{

    protected $signature = 'send:newletters';

    protected $description = 'This is used to send news letters to all the subscribed users.';

    public function handle()
    {
        $name = $this -> ask('What is your name?');
        $this -> info('My name is: '. $name);
    }
}
