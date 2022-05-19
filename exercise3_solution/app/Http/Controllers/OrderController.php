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

        return view('orders.index');
//
//        '<a class="btn btn-info" id="show-user" data-toggle="modal" data-id='.$row->id.'>Show</a>
//<a class="btn btn-success" id="edit-user" data-toggle="modal" data-id='.$row->id.'>Edit </a>
//<meta name="csrf-token" content="{{ csrf_token() }}">
//<a id="delete-user" data-id='.$row->id.' class="btn btn-danger delete-user">Delete</a>';

    }
}
