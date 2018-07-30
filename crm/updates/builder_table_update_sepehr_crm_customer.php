<?php namespace Sepehr\Crm\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSepehrCrmCustomer extends Migration
{
    public function up()
    {
        Schema::table('sepehr_crm_customer', function($table)
        {
            $table->text('connection');
        });
    }
    
    public function down()
    {
        Schema::table('sepehr_crm_customer', function($table)
        {
            $table->dropColumn('connection');
        });
    }
}
