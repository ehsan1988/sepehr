<?php namespace Sepehr\Crm\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSepehrCrmBackwardStatus extends Migration
{
    public function up()
    {
        Schema::create('sepehr_crm_backward_status', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sepehr_crm_backward_status');
    }
}
