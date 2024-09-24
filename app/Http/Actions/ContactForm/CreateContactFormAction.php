<?php

namespace App\Http\Actions\ContactForm;

use App\Models\ContactForm;

class CreateContactFormAction
{
    public function __invoke($data)
    {
        ContactForm::create($data);
    }
}
