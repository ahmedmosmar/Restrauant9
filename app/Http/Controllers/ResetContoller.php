<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResetModel;
use App\Models\OrderModel;
use App\Traits\my_functions;

class ResetContoller extends Controller
{
    use my_functions;
    public function addReset(Request $request)
    {

        if (isset($request)) {

            $add_reset = $this->storeThink(ResetModel::class, $request);
            if ($add_reset) {

                $reset_id = ResetModel::orderby('id', 'DESC')->first();
                $orders = OrderModel::where('sales_table', $request->table_number)->where('status', 0)->get();

                foreach ($orders as $order) {
                    $update_order = OrderModel::find($order->id);
                    $update_order->update([
                        'status' => 1,
                        'reset_id' => $reset_id->id

                    ]);
                }

                return response()->json([
                    'status' => true,

                ]);
            }
        }
    }

    public function showReset()
    {
       $resets = ResetModel::orderby('id' , 'DESC')->get();
       return view('pages-reset.page-show-reset' , compact('resets'));
    }

    public function showResetOrder($reset_id)
    {
        // return $reset_id;
       $orders = OrderModel::where('reset_id' , $reset_id)
      ->with(['type_Fun_Relation' => function($select){
          $select->select('id' ,'type_name','price_sale');
      }])->get();


      $total_price = 0;
      foreach($orders as $order){
        $total_price += $order->type_Fun_Relation->price_sale;
      }
       return view('pages-reset.page-show-reset-orders' , compact('orders','reset_id','total_price'));
    }

     // ====== function delete reset ======
    public function deleteReset($reset_id)
    {
        if (isset($reset_id)) {

            $deleteReset = $this->deleteThink(ResetModel::class, $reset_id);

            if ($deleteReset == true) {
                return response()->json([
                    'status' => true
                ]);
            }
        }
    }


}