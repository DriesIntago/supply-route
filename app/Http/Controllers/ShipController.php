<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ShipController extends Controller
{
    protected $base_uri;
    protected $httpClient;

    public function __construct(Http $httpClient)
    {
        $this->base_uri = config('api.ais.endpoint');
        $this->httpClient = $httpClient;
    }

    public function locate(int $mmsi)
    {
        $response = $this->httpClient::get($this->base_uri, [
            'mmsi'=>$mmsi,
        ]);

        if ($response->ok()) {
            return $response[0];
        }

        return null;
    }
}
