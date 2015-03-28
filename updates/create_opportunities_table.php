<?php namespace Acme\Crm\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateOpportunitiesTable extends Migration
{

    public function up()
    {
        Schema::create('acme_crm_opportunities', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('status_id')->unsigned()->nullable()->index();
            $table->timestamp('closed_at')->nullable();
            $table->timestamps();
        });

        Schema::create('acme_crm_opportunities_contacts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('opportunity_id')->unsigned();
            $table->integer('contact_id')->unsigned();
            $table->primary(['opportunity_id', 'contact_id'], 'opportunity_contact');
        });

        Schema::create('acme_crm_opportunities_offerings', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('opportunity_id')->unsigned();
            $table->integer('offering_id')->unsigned();
            $table->decimal('price', 15)->default(0);
            $table->decimal('cost', 15)->default(0);
            $table->integer('owner_id')->unsigned()->nullable()->index();
            $table->primary(['opportunity_id', 'offering_id'], 'opportunity_offering');
        });
    }

    public function down()
    {
        Schema::dropIfExists('acme_crm_opportunities');
        Schema::dropIfExists('acme_crm_opportunities_contacts');
        Schema::dropIfExists('acme_crm_opportunities_offerings');
    }

}
