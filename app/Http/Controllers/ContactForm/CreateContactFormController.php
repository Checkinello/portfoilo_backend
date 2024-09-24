<?php

namespace App\Http\Controllers\ContactForm;

use App\Http\Actions\ContactForm\CreateContactFormAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactForm\CreateContactFormRequest;

class CreateContactFormController extends Controller
{
    public function __invoke(
        CreateContactFormAction $createContactFormAction,
        CreateContactFormRequest $request
    )
    {
        try {
            $createContactFormAction->__invoke($request->all());

            return response()->json([
                'message' => 'ContactForm created successfully'
            ]);
        }catch (\Exception $exception){
            return response()->json([
                'error' => 'Failed to delete contactForm',
                'details' => $exception->getMessage()
            ], 400);
        }
    }
}

