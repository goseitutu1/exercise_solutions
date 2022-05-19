<?php

namespace App\Http\Controllers;

use App\DataTables\OrdersDataTable;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class OrderController extends Controller
{
    public function index(Request $request){

        if ($request->ajax()) {

            $data = Order::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){

                    $action =
                        '<a class="btn btn-info" id="show-user" data-toggle="modal" data-id='.$row->id.'>Show</a>';

                    return $action;

                })
                ->rawColumns(['action'])
                ->make(true);
        }
        $orders = Order::get();
        return view('orders.index',[
            'orders' => $orders,
        ]);
    }
}
