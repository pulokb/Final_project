<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Helpers\AdminHelper;

class CreateVolunteersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('profession')->nullable();
            $table->string('designation')->nullable();
            $table->string('identity_type')->nullable();
            $table->string('identity')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('blood_group')->nullable();
            $table->text('details')->nullable();
            $table->string('district')->nullable();
            $table->string('area')->nullable();
            $table->text('address')->nullable();
            $table->double('latitude')->nullable();
            $table->double('longtitude')->nullable();
            $table->text('map_address')->nullable();
            $table->string('status')->nullable();
            $table->string('type')->nullable();
            $table->string('approval')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->text('description')->nullable();
            $table->text('interest')->nullable();
            $table->string('refer_code')->nullable();
            $table->string('referance')->nullable();
            $table->date('birth_date')->nullable();
            $table->date('joining_date')->nullable();
            $table->string('image')->nullable();
            $table->string('attachment')->nullable();
            $table->timestamps();
        });

        $adminPermissions = [

            [
                'group_name' => 'Volunteer',
                'permissions' => [
                    // Volunteer Permissions
                    ['name'=>'Volunteer-view','route'=>route('admin.volunteers.index'),'search_status'=>1],
                    ['name'=>'Volunteer-create','route'=>route('admin.volunteers.create'),'search_status'=>1],
                    ['name'=>'Volunteer-update','route'=>NULL,'search_status'=>0],
                    ['name'=>'Volunteer-delete','route'=>NULL,'search_status'=>0],
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
        Schema::drop('volunteers');
    }
}
