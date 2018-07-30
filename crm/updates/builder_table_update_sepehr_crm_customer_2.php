<?php namespace Sepehr\Crm\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSepehrCrmCustomer2 extends Migration
{
    public function up()
    {
        Schema::table('sepehr_crm_customer', function($table)
        {
            $table->text('connection')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('sepehr_crm_customer', function($table)
        {
            $table->string('connection', 0)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
