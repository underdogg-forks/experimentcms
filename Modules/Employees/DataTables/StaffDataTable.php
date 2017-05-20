<?php

namespace Modules\Employees\DataTables;

use Modules\Employees\Models\Staff;
use Form;
use Yajra\Datatables\Services\DataTable;

class StaffDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'staff.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $staff = Staff::query();
        dd($staff);

        return $this->applyScopes($staff);
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
            'firstname' => ['name' => 'firstname', 'data' => 'firstname'],
            'lastname' => ['name' => 'lastname', 'data' => 'lastname'],
            'email' => ['name' => 'email', 'data' => 'email'],
            'facebook' => ['name' => 'facebook', 'data' => 'facebook'],
            'linkedin' => ['name' => 'linkedin', 'data' => 'linkedin'],
            'phonenumber' => ['name' => 'phonenumber', 'data' => 'phonenumber']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'staff';
    }
}
