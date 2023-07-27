<?php

use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;
use MailchimpMarketing\ApiClient;

Route::post('newsletter', function () {
    request()->validate(['email' => 'required|email']);

    $mailchimp = new ApiClient();

    $listId = '0e7e489a98';

    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us12'
    ]);

    try {
        $response = $mailchimp->lists->addListMember($listId,[
            'email_address' => request('email'),
            'status' => 'subscribed',
        ]);
    } catch (\Exception $e) {
        throw \Illuminate\Validation\ValidationException::withMessages([
            'email' => 'This email is wrong',
        ]);
    }

//    dd($response);

    return redirect('/')
        ->with('success', 'You are now signed up for our newsletter');
});

Route::get('/', [PostsController::class, 'index'])->name('home');

Route::get('/posts/{post}', [PostsController::class, 'show'])->name('show');
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');
