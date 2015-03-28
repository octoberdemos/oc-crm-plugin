<?php namespace Acme\Crm\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateOfferingsTable extends Migration
{

    public function up()
    {
        Schema::create('acme_crm_offerings', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->decimal('price', 15)->default(0);
            $table->decimal('cost', 15)->default(0);
            $table->integer('owner_id')->unsigned()->nullable()->index();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('acme_crm_offerings');
    }

}
