<?php

namespace App\DataTables;

use App\Models\HelpActivity;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use App\Helpers\AdminHelper;
use Str;

class HelpActivityDataTable extends DataTable
{

    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);
        return $dataTable->addColumn('action', 'admin.help_activities.datatables_actions')
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

    public function query(HelpActivity $model)
    {
        return $model->newQuery();
    }

    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false,'title' => __('Action')])
            ->parameters(AdminHelper::datatableDesign("HelpActivity","HelpActivity-delete"));
    }

    protected function getColumns()
    {
        return [
            '',
            'id',
            ['data'=>'Sl','title'=>__('Sl')],
            'activity',
            'note',
            'status',
            'help_request',
            'volunteer',
            'image'
        ];
    }

    protected function filename()
    {
        return 'help_activities_datatable_' . time();
    }
}
