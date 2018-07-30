<?php namespace Sepehr\Crm\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSepehrCrmCustomer extends Migration
{
    public function up()
    {
        Schema::create('sepehr_crm_customer', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('name');
            $table->text('product');
            $table->text('user_name');
            $table->text('password');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sepehr_crm_customer');
    }
}
