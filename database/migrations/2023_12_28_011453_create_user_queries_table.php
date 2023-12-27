<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Helpers\AdminHelper;

class CreateUserQueriesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_queries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('age');
            $table->string('gender');
            $table->string('physical_rating');
            $table->string('mental_rating');
            $table->string('dailylife_problems');
            $table->string('affected_ability');
            $table->string('low_down');
            $table->string('affected_relationship');
            $table->string('experience');
            $table->text('note');
            $table->timestamps();
        });

        $adminPermissions = [

            [
                'group_name' => 'UserQuery',
                'permissions' => [
                    // UserQuery Permissions
                    ['name'=>'UserQuery-view','route'=>route('admin.userQueries.index'),'search_status'=>1],
                    ['name'=>'UserQuery-create','route'=>route('admin.userQueries.create'),'search_status'=>1],
                    ['name'=>'UserQuery-update','route'=>NULL,'search_status'=>0],
                    ['name'=>'UserQuery-delete','route'=>NULL,'search_status'=>0],
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
        Schema::drop('user_queries');
    }
}
