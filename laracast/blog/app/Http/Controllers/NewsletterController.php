<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter)
    {
        request()->validate(['email' => 'required|email']);
        // require_once('/path/to/MailchimpMarketing/vendor/autoload.php');



        try {
            $newsletter->subscribe(request('email'));
        } catch (\Exception $e) {
            throw ValidationException::withMessages([
                'email' => 'This email could not be added to our newsletter list',
            ])->redirectTo('/#newsletter');
        }


        return redirect('/')->with('success', 'You are now subscribed for our newsletter!');
    }
}
