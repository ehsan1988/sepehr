<?php namespace Sepehr\Crm\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSepehrCrmSystemUser extends Migration
{
    public function up()
    {
        Schema::create('sepehr_crm_system_user', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('operators')->nullable();
            $table->integer('manager_id')->nullable();
            $table->integer('user_type')->default(0);
            $table->integer('active_status')->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sepehr_crm_system_user');
    }
}
