<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class SendAccountExpiryNotifications extends Command
{
    protected $signature = 'send:account-expiry-notifications';
    protected $description = 'Command description';
    public function handle()
    {
        // query which will fetch the users near expity and triggers them an email.
        Log::info('Email sent.'); 
    }
}
