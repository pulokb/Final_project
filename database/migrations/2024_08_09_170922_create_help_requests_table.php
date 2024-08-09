<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Helpers\AdminHelper;

class CreateHelpRequestsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('help_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->text('details')->nullable();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('district')->nullable();
            $table->string('area')->nullable();
            $table->text('address')->nullable();
            $table->string('priority')->nullable();
            $table->string('status')->nullable();
            $table->string('video')->nullable();
            $table->string('image')->nullable();
            $table->date('resolve_time')->nullable();
            $table->integer('help_type')->unsigned();
            $table->timestamps();
            $table->foreign('help_type')->references('id')->on('help_types');
        });

        $adminPermissions = [

            [
                'group_name' => 'HelpRequest',
                'permissions' => [
                    // HelpRequest Permissions
                    ['name'=>'HelpRequest-view','route'=>route('admin.helpRequests.index'),'search_status'=>1],
                    ['name'=>'HelpRequest-create','route'=>route('admin.helpRequests.create'),'search_status'=>1],
                    ['name'=>'HelpRequest-update','route'=>NULL,'search_status'=>0],
                    ['name'=>'HelpRequest-delete','route'=>NULL,'search_status'=>0],
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
        Schema::drop('help_requests');
    }
}
