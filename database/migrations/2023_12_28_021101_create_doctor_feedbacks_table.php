<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Helpers\AdminHelper;

class CreateDoctorFeedbacksTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_feedbacks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_queries_id');
            $table->integer('user_id');
            $table->integer('admin_id');
            $table->text('symptoms');
            $table->text('suggestions');
            $table->text('note');
            $table->timestamps();
        });

        $adminPermissions = [

            [
                'group_name' => 'DoctorFeedback',
                'permissions' => [
                    // DoctorFeedback Permissions
                    ['name'=>'DoctorFeedback-view','route'=>route('admin.doctorFeedbacks.index'),'search_status'=>1],
                    ['name'=>'DoctorFeedback-create','route'=>route('admin.doctorFeedbacks.create'),'search_status'=>1],
                    ['name'=>'DoctorFeedback-update','route'=>NULL,'search_status'=>0],
                    ['name'=>'DoctorFeedback-delete','route'=>NULL,'search_status'=>0],
                ]
            ],
        ];

        (new AdminHelper())->addPermission("admin",$adminPermissions);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('doctor_feedbacks');
    }
}
