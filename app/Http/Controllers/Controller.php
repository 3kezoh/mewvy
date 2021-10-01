<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\JsonResponse;

class Controller extends BaseController
{
    public function getTime()
    {
        return new JsonResponse([
            "time" => Carbon::now()->timestamp
        ]);
    }
}
