<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Illuminate\Support\Facades\Log;

class SendNewsLetters extends Command implements PromptsForMissingInput
{

    protected $signature = 'send:newletters {user}';

    protected $description = 'This is used to send news letters to all the subscribed users.';

    public function handle()
    {
        // $name = $this -> ask('What is your name?');
        // $this -> info('My name is: '. $name);

        $user_id = $this -> arguement('user');
        $this -> info('User ID: ' . $user_id);
    }
}
