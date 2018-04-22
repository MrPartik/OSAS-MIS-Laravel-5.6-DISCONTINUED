<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccreditationRequirement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        		Schema::create('r_org_accreditation_details', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->increments('OrgAccrDetail_ID');
		    $table->string('OrgAccrDetail_CODE', 15);
		    $table->string('OrgAccrDetail_NAME', 100);
		    $table->string('OrgAccrDetail_DESC', 100)->default('Accreditation Description');
		    $table->dateTime('OrgAccrDetail_DATE_ADD')->default(\DB::raw('CURRENT_TIMESTAMP'));
		    $table->dateTime('OrgAccrDetail_DATE_MOD')->default(\DB::raw('CURRENT_TIMESTAMP'));
		    $table->enum('OrgAccrDetail_DISPLAY_STAT', ['Active', 'Inactive'])->default('Active');
		
		    $table->unique('orgaccrdetail_code','unq_orgaccrdetail_code');
		
		    $table->timestamps();
		
		});

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('r_org_accreditation_details');
    }
}
