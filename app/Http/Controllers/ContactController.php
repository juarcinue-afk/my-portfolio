<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactMessageRequest;
use App\Mail\ContactMessageMail;
use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;
use Throwable;

class ContactController extends Controller
{
    public function store(ContactMessageRequest $request): RedirectResponse
    {
        $success = 'Thank you! Your message has been sent.';

        // Honeypot: real visitors never fill this hidden field.
        if (filled($request->input('website'))) {
            return redirect('/#contact')->with('contact_success', $success);
        }

        try {
            $contact = ContactMessage::create([
                ...$request->safe()->only(['name', 'email', 'subject', 'message']),
                'ip_address' => $request->ip(),
            ]);
        } catch (Throwable $e) {
            report($e);

            return redirect('/#contact')
                ->withInput(Arr::except($request->all(), ['website']))
                ->withErrors(['form' => 'Sorry, your message could not be sent. Please try again later.']);
        }

        // The message is already saved; an email failure is logged but does not lose it.
        if ($to = config('portfolio.email')) {
            try {
                Mail::to($to)->send(new ContactMessageMail($contact));
            } catch (Throwable $e) {
                report($e);
            }
        }

        return redirect('/#contact')->with('contact_success', $success);
    }
}
