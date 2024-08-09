<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Helpers\AdminHelper;

class CreateEmergencyContactsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emergency_contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('operator')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('details')->nullable();
            $table->string('district')->nullable();
            $table->string('area')->nullable();
            $table->text('address')->nullable();
            $table->double('latitude')->nullable();
            $table->double('longtitude')->nullable();
            $table->text('map_address')->nullable();
            $table->string('status')->nullable();
            $table->string('type')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });

        $adminPermissions = [

            [
                'group_name' => 'EmergencyContact',
                'permissions' => [
                    // EmergencyContact Permissions
                    ['name'=>'EmergencyContact-view','route'=>route('admin.emergencyContacts.index'),'search_status'=>1],
                    ['name'=>'EmergencyContact-create','route'=>route('admin.emergencyContacts.create'),'search_status'=>1],
                    ['name'=>'EmergencyContact-update','route'=>NULL,'search_status'=>0],
                    ['name'=>'EmergencyContact-delete','route'=>NULL,'search_status'=>0],
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
        Schema::drop('emergency_contacts');
    }
}
