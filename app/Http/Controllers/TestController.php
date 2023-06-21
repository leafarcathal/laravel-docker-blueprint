<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Response as HttpResponse;
use Illuminate\Http\Request as HttpRequest;

class TestController
{
    public function index(HttpRequest $request): HttpResponse
    {
        $message = sprintf("Hello World, %s", $request->request->get('user'));
        return response(["message" => $message], 200);
    }
}
