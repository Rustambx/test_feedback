<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @OA\Info(
 *     title="Feedback API",
 *     version="1.0.0",
 *     description="API documentation for Laravel application"
 * ),
 * @OA\SecurityScheme(
 *     securityScheme="ApiKeyAuth",
 *     type="apiKey",
 *     in="header",
 *     name="Authorization"
 * ),
 * @OA\Post(
 *     path="/api/feedback",
 *     tags={"Feedback"},
 *     summary="Store feedback",
 *     description="Endpoint to store feedback data",
 *     @OA\RequestBody(
 *         required=true,
 *         description="Feedback data",
 *         @OA\MediaType(
 *             mediaType="multipart/form-data",
 *             @OA\Schema(
 *                 required={"name", "email", "phone", "city", "subject", "message"},
 *                 @OA\Property(
 *                     property="name",
 *                     type="string",
 *                     description="Имя клиента",
 *                 ),
 *                 @OA\Property(
 *                     property="email",
 *                     type="string",
 *                     format="email",
 *                     description="Email клиента",
 *                 ),
 *                 @OA\Property(
 *                     property="phone",
 *                     type="string",
 *                     description="Телефон клиента",
 *                 ),
 *                 @OA\Property(
 *                     property="city",
 *                     type="string",
 *                     description="Город клиента",
 *                 ),
 *                 @OA\Property(
 *                     property="subject",
 *                     type="string",
 *                     description="Тема обращения",
 *                 ),
 *                 @OA\Property(
 *                     property="message",
 *                     type="string",
 *                     description="Сообщение",
 *                 ),
 *                 @OA\Property(
 *                     property="file",
 *                     type="file",
 *                     description="Вложенный файл",
 *                 ),
 *             ),
 *         ),
 *     ),
 *     @OA\Response(
 *         response=201,
 *         description="Feedback submitted successfully",
 *      @OA\JsonContent(
 *         @OA\Property(property="message", type="string", example="Feedback submitted successfully"),
 *         @OA\Property(property="data", type="object",
 *             @OA\Property(property="name", type="string", example="test"),
 *             @OA\Property(property="email", type="string", example="test@mailru"),
 *             @OA\Property(property="phone", type="string", example="+9987844545"),
 *             @OA\Property(property="city", type="string", example="Moscow"),
 *             @OA\Property(property="subject", type="string", example="Test subject"),
 *             @OA\Property(property="message", type="string", example="test message"),
 *             @OA\Property(property="updated_at", type="string", format="date-time", example="2024-05-22T13:56:26.000000Z"),
 *             @OA\Property(property="created_at", type="string", format="date-time", example="2024-05-22T13:56:26.000000Z"),
 *             @OA\Property(property="id", type="integer", example=1),
 *         ),
 *      ),
 *     ),
 *     @OA\Response(
 *         response=400,
 *         description="Bad request",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Validation error")
 *         )
 *     ),
 *     security={{"ApiKeyAuth": {"Bearer YOUR_STATIC_TOKEN"}}}
 * )
 */



class FeedbackController extends Controller
{
    //
}
