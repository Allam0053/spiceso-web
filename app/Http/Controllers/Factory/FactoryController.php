<?php

namespace App\Http\Controllers\Factory;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Factory\Implements\Product;
use App\Http\Controllers\Factory\Interfaces\Common;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class FactoryController extends Controller
{
    private $factory;

    private Common $dashboard;
    private Common $order;
    private Common $product;

    public function __construct()
    {
        $this->factory      = new Factory;
        $this->dashboard    = $this->factory->getController('dashboard');
        $this->order        = $this->factory->getController('order');
        $this->product      = $this->factory->getController('product');
    }

    public function indexDashboard()
    {
        return $this->dashboard->index();
    }
    public function createDashboard()
    {
        return $this->dashboard->create();
    }
    public function storeDashboard(FormRequest $request)
    {
        return $this->dashboard->store($request);
    }
    public function showDashboard($id)
    {
        return $this->dashboard->show($id);
    }
    public function editDashboard($id)
    {
        return $this->dashboard->edit($id);
    }
    public function updateDashboard(FormRequest $request, $id)
    {
        return $this->dashboard->update($request, $id);
    }
    public function destroyDashboard($id)
    {
        return $this->dashboard->destroy($id);
    }


    public function indexOrder()
    {
        return $this->order->index();
    }
    public function createOrder()
    {
        return $this->order->create();
    }
    public function storeOrder(FormRequest $request)
    {
        return $this->order->store($request);
    }
    public function showOrder($id)
    {
        return $this->order->show($id);
    }
    public function editOrder($id)
    {
        return $this->order->edit($id);
    }
    public function updateOrder(FormRequest $request, $id)
    {
        return $this->order->update($request, $id);
    }
    public function destroyOrder($id)
    {
        return $this->order->destroy($id);
    }


    public function indexProduct()
    {
        return $this->product->index();
    }
    public function createProduct()
    {
        return $this->product->create();
    }
    public function storeProduct(FormRequest $request)
    {
        return $this->product->store($request);
    }
    public function showProduct($id)
    {
        return $this->product->show($id);
    }
    public function editProduct($id)
    {
        return $this->product->edit($id);
    }
    public function updateProduct(FormRequest $request, $id)
    {
        return $this->product->update($request, $id);
    }
    public function destroyProduct($id)
    {
        return $this->product->destroy($id);
    }
}

/**
 * 
    public function index();
    public function create();

    public function store(FormRequest $request);
    public function show($id);

    public function edit($id);

    public function update(FormRequest $request, $id);
    public function destroy($id);
 */
