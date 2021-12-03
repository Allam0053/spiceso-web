<?php

namespace App\Actions\Common\Order;

use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\TrolleyProduct;
use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Support\Facades\DB;
use Exception;

class StoreOrder
{
  use AsAction;

  public function handle($fill)
  {
    DB::beginTransaction();

    try {
      $order = Order::create([
        'user_id' => $fill['user_id'],
        'total_harga' => $fill['total_harga'],
        'tgl_dipesan' => $fill['tgl_dipesan'],
      ]);

      if (!$order) {
        DB::rollBack();
        return false;
      }

      for ($i = 0; $i < count($fill['idproduks']); $i++) {
        TrolleyProduct::where('trolley_id', $fill['trolley_id'])
          ->where('product_id', $fill['idproduks'][$i])
          ->delete();

        $order_product = OrderProduct::create([
          'product_id' => $fill['idproduks'][$i],
          'order_id' => $order->order_id,
          'jumlah' => $fill['jumlahproduks'][$i],
        ]);

        if (!$order_product) {
          DB::rollBack();
          return false;
        }
      }

      DB::commit();

      return $order;
    } catch (Exception $exc) {
      DB::rollBack();

      throw $exc;
    }
  }
}
