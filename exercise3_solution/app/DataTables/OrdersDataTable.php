<?php

namespace App\DataTables;

use App\Extension;
use App\Models\Order;
use Carbon\Carbon;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Facades\DataTables;


/**
 * @method render(string $string)
 */
class OrdersDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query)

            ->addColumn('action', function($query){
                return '<div class="btn-group">'.
                    '<a class="btn btn-outline-info btn-xs" title="View" href="'.route('edit.extension', $query->id).'"><i class="fa fa-edit"></i></a>'.
//                    '<a class="btn btn-success btn-xs"  href="#"  onclick="return confirm(\'Are you sure you want to validate client?\')"><i class="fa fa-edit"></i></a>'.
                    '</div>';
            })
            ->addColumn('service_name', function($query){
                return $query->service_name;
            })
            ->addColumn('service_number', function ($query){
                return $query->service_number;
            })
            ->addColumn('service_description', function($query){
                return $query->service_description;
            })
            ->addColumn('service_url', function($query){
                return $query->url;
            })
            ->addColumn('created_at_date', function($query){
                return Carbon::createFromFormat('Y-m-d H:i:s', $query->created_at)->format('Y-m-d');
            })
            ->addColumn('updated_at_date', function($query){

               return Carbon::createFromFormat('Y-m-d H:i:s', $query->created_at)->format('Y-m-d');
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\ExtensionsDataTable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $query = Order::query();

        return $query;
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
                'service_name',
                'service_number',
                'service_description',
                'service_url',
                'created_at_date',
                'updated_at_date',
                'action'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Extensions_' . date('YmdHis');
    }
}
