<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /** @var ProductRepository */
    protected ProductRepository $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function filter(Request $request)
    {
        $products = $this->productRepository->search($request->all());

        return response()->json($products, 200);
    }

    /**
     * @param $id
     * @return JsonResponse
     */
    public function find($id)
    {
        try {
            $product = $this->productRepository->find($id);
        }catch(\Exception $exception){
            return  response()->json([
                "massage" => "Não foi encotrado nenhum produto."
            ], 400);
        }

        return response()->json($product, 200);
    }
}
