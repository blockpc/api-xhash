<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CodeResource;
use App\Models\Code;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

final class XhashController extends Controller
{
    public function __invoke($zip_code)
    {
        if ( !$code = Code::where('zip_code', $zip_code)->first() ) {
            $response = Http::get('https://jobs.backbonesystems.io/api/zip-codes/'.$zip_code);
            if($response->failed()) {
                return response()->json([
                    'error' => 'El codigo zip ' . $zip_code . ' no fue encontrado'
                ], 404);
            }
            $code = Code::create($response->json());
        }
        
        return CodeResource::make($code);
    }
}