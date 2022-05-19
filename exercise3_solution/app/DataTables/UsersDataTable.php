<?php

namespace App\DataTables;

use App\Role;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Html\Editor\Editor;

class UsersDataTable extends DataTable
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
            ->addColumn('name', function($query){
                return $query->name;
            })
            ->addColumn('email', function ($query){
                return $query->email;
            })
            ->addColumn('role', function($query){
                $role = Role::find($query->role_id);
                return $role->role;
            })
            ->addColumn('status', function($query){
                if($query->isActive)
                {
                    return 'active';
                }else{
                    return 'inactive';
                }
            })
            ->addColumn('created_at_date', function($query){
                return Carbon::createFromFormat('Y-m-d H:i:s', $query->created_at)->format('Y-m-d');
            });
//            ->addColumn('updated_at_date', function($query){
//
//                return Carbon::createFromFormat('Y-m-d H:i:s', $query->created_at)->format('Y-m-d');
//            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\UsersDataTable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $query = DB::table('users')
            ->join('roles', 'users.role_id','=', 'roles.id')
            ->where('roles.role', '!=', 'super_admin')
            ->select('users.*');

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
//                        Button::make('create'),
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
            'name',
            'email',
            'role',
            'status',
            'created_at_date',
//            'updated_at_date',
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
        return 'Users_' . date('YmdHis');
    }
}
