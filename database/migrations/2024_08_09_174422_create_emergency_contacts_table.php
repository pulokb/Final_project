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
            $table->string('name');
            $table->string('operator');
            $table->string('phone');
            $table->string('email');
            $table->text('details');
            $table->string('district');
            $table->string('area');
            $table->text('address');
            $table->double('latitude');
            $table->string('longtitude');
            $table->text('map_address');
            $table->string('status');
            $table->string('type');
            $table->string('image');
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
