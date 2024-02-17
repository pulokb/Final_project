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
            $table->string('physical_health');
            $table->string('mental_health');
            $table->string('therapist');
            $table->string('medication');
            $table->string('sleep_hours');
            $table->string('sleep_quality');
            $table->string('relationship_status');
            $table->string('current_relationship');
            $table->string('smoking_frequency');
            $table->string('drinking_frequency');
            $table->string('job_change');
            $table->string('routine_change');
            $table->string('tough_emotional');
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
