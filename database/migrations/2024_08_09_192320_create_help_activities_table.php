<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Helpers\AdminHelper;

class CreateHelpActivitiesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('help_activities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('activity');
            $table->text('note');
            $table->string('status');
            $table->integer('help_request')->unsigned();
            $table->integer('volunteer')->unsigned();
            $table->string('image');
            $table->timestamps();
            $table->foreign('help_request')->references('id')->on('help_requests');
            $table->foreign('volunteer')->references('id')->on('volunteers');
        });

        $adminPermissions = [

            [
                'group_name' => 'HelpActivity',
                'permissions' => [
                    // HelpActivity Permissions
                    ['name'=>'HelpActivity-view','route'=>route('admin.helpActivities.index'),'search_status'=>1],
                    ['name'=>'HelpActivity-create','route'=>route('admin.helpActivities.create'),'search_status'=>1],
                    ['name'=>'HelpActivity-update','route'=>NULL,'search_status'=>0],
                    ['name'=>'HelpActivity-delete','route'=>NULL,'search_status'=>0],
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
        Schema::drop('help_activities');
    }
}
