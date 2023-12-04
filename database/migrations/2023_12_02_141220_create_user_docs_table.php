<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_docs', function (Blueprint $table) {
            //base
            $table->id();
            $table->timestamps();
            $table->integer('application_id');
            $table->string('fio');
            $table->string('phone');
            $table->string('email');
            $table->decimal('month_pay')->nullable();
            $table->decimal('remains')->nullable();
            $table->decimal('contract_price')->nullable();
            $table->decimal('payed')->nullable();

            //fio
            $table->string('surname')->nullable();
            $table->string('name')->nullable();
            $table->string('parent_name')->nullable();

            $table->boolean('surname_is_changed')->default('f');

            //registration
            $table->string('subject')->nullable();
            $table->string('region')->nullable();
            $table->string('city')->nullable();
            $table->string('locality')->nullable();
            $table->string('house')->nullable();
            $table->string('flat')->nullable();

            //real_address
            $table->boolean('address_matches')->default('t');

            $table->string('fact_subject')->nullable();
            $table->string('fact_region')->nullable();
            $table->string('fact_city')->nullable();
            $table->string('fact_locality')->nullable();
            $table->string('fact_house')->nullable();
            $table->string('fact_flat')->nullable();

            //gos_uslugi
            $table->string('gos_uslugi_login')->nullable();
            $table->string('gos_uslugi_password')->nullable();

            //children
            $table->boolean('have_children')->default('f');
            $table->integer('children_amount')->default(0);


            //marriage
            $table->boolean('is_married')->nullable();
            $table->string('marriage_certificate')->nullable();
            $table->string('spouse_passport')->nullable();
            $table->string('spouse_inn')->nullable();
            $table->string('spouse_snils')->nullable();

            //work
            $table->boolean('is_work_official')->nullable();
            $table->string('employment_history')->nullable();
            $table->string('work_place')->nullable();

            //pensia
            $table->boolean('is_pensioner')->default('f');
            $table->string('pensioner_certificate')->nullable();

            //income
            $table->decimal('income')->nullable();
            $table->string('2_ndfl')->nullable();
            $table->string('ils')->nullable();
            $table->string('appointment_certificate_pensions')->nullable();

            //estate
            $table->string('estate_egrn')->nullable();
            //land_plot
            $table->boolean('have_land_plot')->nullable();
            $table->integer('land_plot_amount')->nullable();
            //residential_houses
            $table->boolean('have_residential_houses')->nullable();
            $table->integer('residential_houses_amount')->nullable();
            //flats
            $table->boolean('have_flats')->nullable();
            $table->integer('flats_amount')->nullable();
            //garages
            $table->boolean('have_garages')->nullable();
            $table->integer('garages_amount')->nullable();
            //another
            $table->boolean('have_another_estate')->nullable();
            $table->integer('garages_another_estate')->nullable();

            //movable property
            $table->string('movable_property_egrn')->nullable();
            //cargo_vehicles
            $table->boolean('have_cargo_vehicles')->nullable();
            $table->integer('cargo_vehicles_amount')->nullable();
            //motorized_transport
            $table->boolean('have_motorized_transport')->nullable();
            $table->integer('motorized_transport_amount')->nullable();
            //agricultural_technique
            $table->boolean('have_agricultural_technique')->nullable();
            $table->integer('agricultural_technique_amount')->nullable();
            //water_transport
            $table->boolean('have_water_transport')->nullable();
            $table->integer('water_transport_amount')->nullable();
            //air_transport
            $table->boolean('have_air_transport')->nullable();
            $table->integer('air_transport_amount')->nullable();
            //other_transport
            $table->boolean('have_other_transport')->nullable();
            $table->integer('other_transport_amount')->nullable();

            //bank_accounts
            $table->integer('bank_accounts_amount')->nullable();
            $table->string('tax_certificate')->nullable();

            //creditors
            $table->integer('creditors_amount')->nullable();

            //obligatory_payments
            $table->integer('obligatory_payments_amount')->nullable();

            //creditor_notifications
            $table->integer('creditor_notifications_amount')->nullable();
            $table->string('arbitration_manager')->nullable();
            $table->string('arbitration_court')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_docs');
    }
};
