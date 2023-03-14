<?php

namespace App\Interfaces;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

interface ProductInterface
{
    /**
     * @OA\Get(
     *     path="/api/products",
     *     tags={"Products"},
     *     operationId="product-search",
     *     security={ {"jwt": {} }},
     *     @OA\Parameter(
     *         name="search",
     *         in="query",
     *         required=false,
     *         explode=true,
     *         @OA\Schema(
     *             type="string",
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="offset",
     *         in="query",
     *         required=false,
     *         explode=true,
     *         @OA\Schema(
     *             type="integer",
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="per_page",
     *         in="query",
     *         required=false,
     *         explode=true,
     *         @OA\Schema(
     *             type="integer",
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=406,
     *         description="Not Acceptable",
     *         @OA\JsonContent(
     *            @OA\Property(property="error", type="string", example="Header Accept invalido, é preciso setar como application/json.")
     *         )
     *     )
     * )
     */
    public function filter(Request $request): JsonResponse;

    /**
     * @OA\Get(
     *     path="/api/products/{id}",
     *     tags={"Product"},
     *     operationId="product-find",
     *     security={ {"jwt": {} }},
     *     @OA\Parameter(
     *        description="ID do produto",
     *        in="path",
     *        name="id",
     *        required=true,
     *        example="1",
     *        @OA\Schema(
     *           type="integer",
     *           format="int64"
     *        )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(
     *            @OA\Property(property="id", type="string", example=1),
     *            @OA\Property(property="name", type="string", example="Camiseta"),
     *            @OA\Property(property="slug", type="string", example="camiseta"),
     *            @OA\Property(property="price", type="string", example=2999),
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Bad Request",
     *         @OA\JsonContent(
     *            @OA\Property(property="error", type="string", example="Não foi encotrado nenhum produto.")
     *         )
     *     ),
     *     @OA\Response(
     *         response=406,
     *         description="Not Acceptable",
     *         @OA\JsonContent(
     *            @OA\Property(property="error", type="string", example="Header Accept invalido, é preciso setar como application/json.")
     *         )
     *     )
     * )
     */
    public function find($id): JsonResponse;
}
