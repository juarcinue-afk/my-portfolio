<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactMessageRequest extends FormRequest
{
    /** On validation failure, return to the contact section. */
    protected $redirect = '/#contact';

    public function authorize(): bool
    {
        return true;
    }

    /** Trim input and strip line breaks from single-line fields (header safety). */
    protected function prepareForValidation(): void
    {
        $clean = fn ($v) => is_string($v) ? trim(preg_replace('/[\r\n\t]+/', ' ', $v)) : $v;

        $this->merge([
            'name' => $clean($this->input('name')),
            'email' => $clean($this->input('email')),
            'subject' => $clean($this->input('subject')),
            'message' => is_string($this->input('message')) ? trim($this->input('message')) : $this->input('message'),
        ]);
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email:rfc', 'max:150'],
            'subject' => ['required', 'string', 'max:150'],
            'message' => ['required', 'string', 'min:10', 'max:3000'],
            'website' => ['nullable', 'string'], // honeypot, handled in the controller
        ];
    }
}
