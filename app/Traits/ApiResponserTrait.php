<?php
namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponserTrait
{

    /**
     * susccesResponse
     *
     * @param  string $data
     * @param  int  $code
     * @return Illuminate\Http\JsonResponse
     */
    public function susccesResponse($data, $code = Response::HTTP_OK)
    {
        return response($data, $code)->header('Content-Type', 'application/json');
    }
    /**
     * errorResponse
     *
     * @param  string $message
     * @param  int $code
     * @return Illuminate\Http\JsonResponse
     */
    public function errorResponse($message, $code)
    {
        return response()->json(['error' => $message], $code);
    }
    /**
     * Retrun an error in JOSN format
     *
     * @param  string $message
     * @param  int $code
     * @return Illuminate\Http\Response
     */
    public function errorMessage($message, $code)
    {
        return response($message, $code)->header('Content-Type', 'application/json');
    }
}
