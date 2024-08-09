<?php

namespace App\DataTables;

use App\Models\Volunteer;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use App\Helpers\AdminHelper;
use Str;

class VolunteerDataTable extends DataTable
{

    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);
        return $dataTable->addColumn('action', 'admin.volunteers.datatables_actions')
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

    public function query(Volunteer $model)
    {
        return $model->newQuery();
    }

    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false,'title' => __('Action')])
            ->parameters(AdminHelper::datatableDesign("Volunteer","Volunteer-delete"));
    }

    protected function getColumns()
    {
        return [
            '',
            'id',
            ['data'=>'Sl','title'=>__('Sl')],
            'name',
            'profession',
            'designation',
            'identity_type',
            'identity',
            'phone',
            'email',
            'blood_group',
            'details',
            'district',
            'area',
            'address',
            'latitude',
            'longtitude',
            'map_address',
            'status',
            'type',
            'approval',
            'user_id',
            'description',
            'interest',
            'refer_code',
            'referance',
            'birth_date',
            'joining_date',
            'image',
            'attachment'
        ];
    }

    protected function filename()
    {
        return 'volunteers_datatable_' . time();
    }
}