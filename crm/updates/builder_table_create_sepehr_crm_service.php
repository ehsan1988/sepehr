<?php namespace Sepehr\Crm\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSepehrCrmService extends Migration
{
    public function up()
    {
        Schema::create('sepehr_crm_service', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('title');
            $table->text('body');
            $table->integer('priority_id');
            $table->integer('category_id');
            $table->integer('status_id');
            $table->integer('customer_id');
            $table->integer('manager_id');
            $table->text('description')->nullable();
            $table->string('date_accept');
            $table->string('date_reject');
            $table->text('forwards');
            $table->text('operations');
            $table->boolean('is_closed')->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sepehr_crm_service');
    }
}
