<?php

namespace App\DataTables;

use App\Extension;
use App\User;
use Carbon\Carbon;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Html\Editor\Editor;

class ExtensionsWithStatusDatatable extends DataTable
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

                if($query->status === 'pending')
                {
                    return '<div class="btn-group">'.
                                '<a class="btn btn-outline-success btn-xs" title="approve extension" href="'.route('update.extension.status', [$query->id, 'approved']).'"><i class="fa fa-check"></i></a>&emsp;'.
                                '<a class="btn btn-outline-danger btn-xs" title="reject extension" href="'.route('update.extension.status', [$query->id, 'rejected']).'"><i class="fa fa-calendar-times"></i></a>'.
                            '</div>';
                }elseif ($query->status === 'approved')
                {
                    return '<div class="btn-group">'.
                        '<a class="btn btn-outline-info btn-xs" title="View extension" href="'.route('edit.extension',$query->id).'"><i class="fa fa-eye"></i></a>&emsp;'.
                            '</div>';
                }else{
                    return '<div class="btn-group">'.
                                '<a class="btn btn-outline-success btn-xs" title="View extension" href="'.route('edit.extension',$query->id).'"><i class="fa fa-eye"></i></a>&emsp;'.
                                '<a class="btn btn-outline-danger btn-xs" title="View" href="'.route('update.extension.status', [$query->id, 'pending']).'"><i class="fa fa-undo"></i></a>'.
                        '</div>';
                }

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
            ->addColumn('status', function($query){
                return $query->status;
            })
            ->addColumn('created_by', function($query){
                $user = User::find($query->created_by);
                return $user->name;
            })
            ->addColumn('approved_by', function($query){
                if($this->status === 'approved')
                {
                    $user = User::find($query->approved_by);
                    return $user->name;
                }
            })
            ->addColumn('rejected_by', function($query){
                if($this->status === 'rejected')
                {
                    $user = User::find($query->rejected_by);
                    return $user->name;
                }
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
     * @param \App\ExtensionsWithStatusDatatable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $query = Extension::where('status', $this->status);

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
         $columns = [
            'service_name',
            'service_number',
            'service_description',
            'service_url',
            'status',
            'created_by',
        ];

        if ($this->status === 'approved') {
            array_push($columns, 'approved_by');
        }elseif ($this->status === 'rejected')
        {
            array_push($columns, 'rejected_by');
        }

        array_push($columns,
                'created_at_date',
                'updated_at_date',
                'action'

        );

        return $columns;
    }
    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'ExtensionsWithStatus_' . date('YmdHis');
    }
}
