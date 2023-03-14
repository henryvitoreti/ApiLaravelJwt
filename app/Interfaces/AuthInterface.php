<?php

namespace App\Interfaces;

use Illuminate\Http\JsonResponse;

interface AuthInterface
{
    /**
     * @OA\Post(
     *     path="/api/auth/login",
     *     tags={"login"},
     *     operationId="auth-login",
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="email",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="password",
     *                     type="string"
     *                 ),
     *                 example={"email": "usuario@teste.com.br","password": "senha123"}
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(
     *            @OA\Property(property="access_token", type="string", example="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2F1dGgvbG9naW4iLCJpYXQiOjE2Nzg3NjU0MDAsImV4cCI6MTY3ODc2OTAwMCwibmJmIjoxNjc4NzY1NDAwLCJqdGkiOiJITThON0tTaVBuanFKTnR4Iiwic3ViIjoiMSIsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.IV8M7dBOZXuQnhSf7Y0vdQKwDjyUtFvY2wMhOX6DS6o"),
     *            @OA\Property(property="token_type", type="string", example="bearer"),
     *            @OA\Property(property="expires_in", type="integer", example="3600")
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthorized",
     *         @OA\JsonContent(
     *            @OA\Property(property="error", type="string", example="Login incorreto")
     *         )
     *     )
     * )
     */
    public function login(): JsonResponse;
}
