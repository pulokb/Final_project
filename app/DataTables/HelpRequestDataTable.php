<?php

namespace App\DataTables;

use App\Models\HelpRequest;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use App\Helpers\AdminHelper;
use Str;

class HelpRequestDataTable extends DataTable
{

    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);
        return $dataTable->addColumn('action', 'admin.help_requests.datatables_actions')
            ->addIndexColumn()
            ->addColumn('', '')
            ->addColumn('Sl', '');
            // ->addColumn('details',function($dataTable){
            //     return Str::limit($dataTable->details,50);
            // })
            // ->addColumn('image', function ($dataTable) {
            //     return "<img width='100px' height='80px' src='".asset('images/'.$dataTable->image)."'/>";
            // })
            // ->addColumn('file',function($dataTable){
            //     return "<a download href='".asset('files/'. $dataTable->file)."'>Download</a>";
            // })
            // ->rawColumns(['details', 'action', 'image', 'file']);
    }

    public function query(HelpRequest $model)
    {
        return $model->newQuery();
    }

    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false,'title' => __('Action')])
            ->parameters(AdminHelper::datatableDesign("HelpRequest","HelpRequest-delete"));
    }

    protected function getColumns()
    {
        return [
            '',
            'id',
            ['data'=>'Sl','title'=>__('Sl')],
            'title',
            'details',
            'name',
            'phone',
            'email',
            'district',
            'area',
            'address',
            'help_type',
            'priority',
            'status',
            'image',
            'video',
            'resolve_time'
        ];
    }

    protected function filename()
    {
        return 'help_requests_datatable_' . time();
    }
}
