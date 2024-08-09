<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Helpers\AdminHelper;

class CreateHelpTypesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('help_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->text('details')->nullable();
            $table->string('status')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });

        $adminPermissions = [

            [
                'group_name' => 'HelpType',
                'permissions' => [
                    // HelpType Permissions
                    ['name'=>'HelpType-view','route'=>route('admin.helpTypes.index'),'search_status'=>1],
                    ['name'=>'HelpType-create','route'=>route('admin.helpTypes.create'),'search_status'=>1],
                    ['name'=>'HelpType-update','route'=>NULL,'search_status'=>0],
                    ['name'=>'HelpType-delete','route'=>NULL,'search_status'=>0],
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
        Schema::drop('help_types');
    }
}
