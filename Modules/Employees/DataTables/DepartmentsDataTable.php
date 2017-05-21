<?php

namespace Modules\Employees\DataTables;

use Modules\Employees\Models\Department;
use Form;
use Yajra\Datatables\Services\DataTable;

class DepartmentsDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'departments.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $departments = Departments::query();

        return $this->applyScopes($departments);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->addAction(['width' => '10%'])
            ->ajax('')
            ->parameters([
                'dom' => 'Bfrtip',
                'scrollX' => false,
                'buttons' => [
                    'print',
                    'reset',
                    'reload',
                    [
                         'extend'  => 'collection',
                         'text'    => '<i class="fa fa-download"></i> Export',
                         'buttons' => [
                             'csv',
                             'excel',
                             'pdf',
                         ],
                    ],
                    'colvis'
                ]
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    private function getColumns()
    {
        return [
            'name' => ['name' => 'name', 'data' => 'name'],
            'email' => ['name' => 'email', 'data' => 'email'],
            'host' => ['name' => 'host', 'data' => 'host'],
            'password' => ['name' => 'password', 'data' => 'password'],
            'encryption' => ['name' => 'encryption', 'data' => 'encryption'],
            'delete_after_import' => ['name' => 'delete_after_import', 'data' => 'delete_after_import'],
            'calendar_id' => ['name' => 'calendar_id', 'data' => 'calendar_id'],
            'hidefromclient' => ['name' => 'hidefromclient', 'data' => 'hidefromclient']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'departments';
    }
}
