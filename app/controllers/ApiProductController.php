<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ApiProductController extends Controller
{
    private $api;

    public function __construct()
    {
        parent::__construct();

        $this->call->library('Api');
        $this->api = $this->Api;

        $this->call->model('ProductModel');
    }

    public function index()
    {
        $this->api->require_method('GET');
        $this->api->require_jwt();

        $products = $this->ProductModel->get_products();

        $this->api->respond([
            'products' => $products
        ]);
    }

    public function store()
    {
        $this->api->require_method('POST');
        $this->api->require_jwt();

        $data = $this->api->body();

        if (
            empty($data['product_name']) ||
            !isset($data['price']) ||
            !isset($data['quantity'])
        ) {
            $this->api->respond_error(
                'Product name, price, and quantity are required.',
                400
            );
        }

        $product = [
            'product_name' => $data['product_name'],
            'description' => $data['description'] ?? '',
            'price' => $data['price'],
            'quantity' => $data['quantity']
        ];

        $id = $this->ProductModel->create_product($product);

        $this->api->respond([
            'message' => 'Product added successfully.',
            'id' => $id
        ], 201);
    }

    public function update($id)
    {
        $this->api->require_method('PUT');
        $this->api->require_jwt();

        $data = $this->api->body();

        $product = [
            'product_name' => $data['product_name'] ?? '',
            'description' => $data['description'] ?? '',
            'price' => $data['price'] ?? 0,
            'quantity' => $data['quantity'] ?? 0
        ];

        $this->ProductModel->update_product($id, $product);

        $this->api->respond([
            'message' => 'Product updated successfully.'
        ]);
    }

    public function delete($id)
    {
        $this->api->require_method('DELETE');
        $this->api->require_jwt();

        $this->ProductModel->delete_product($id);

        $this->api->respond([
            'message' => 'Product deleted successfully.'
        ]);
    }
}
