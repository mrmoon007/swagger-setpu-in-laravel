<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
     /**
     * @OA\GET(
     *     path="/api/v1/test/index",
     *     tags={"Test"},
     *     summary="Get Partner Address List",
     *     description="Get Partner Address List",
     *     security={{"bearer": {}}},
     *     operationId="index",
     *     @OA\Response(response=200,description="Get Partner Address List"),
     *     @OA\Response(response=400, description="Bad request"),
     *     @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    
    public function index()
    {
        return "I am here";
        
    }
}
