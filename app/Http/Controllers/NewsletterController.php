<?php

namespace App\Http\Controllers;

use App\services\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use MailchimpMarketing\ApiClient;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter){
        request()->validate([
            'email'=>'required|email'
        ]);
        $mailchimp = new ApiClient();

        $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us5'
        ]);
        try{
            $newsletter->subscribe(request('email'));
        } catch (Exception $e){
            ValidationException::withMessages([
                'email'=>'Cannot add this email. Maybe already added? Or maybe invalid.'
            ]);
        }

        return redirect('/')->with('success', 'You have subscribed to the newsletter!');
    }
}
