<?php

namespace Modules\CompassContactForm\Http\Controllers;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Inertia\Response;

class ContactFormController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('CompassContactForm/ContactForm/Form');
    }
}
