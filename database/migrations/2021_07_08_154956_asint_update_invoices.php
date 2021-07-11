<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AsintUpdateInvoices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table->double('vat');
        });
        Schema::table('invoices', function (Blueprint $table) {
            $table->text('clientName');
        });
        Schema::table('invoices', function (Blueprint $table) {
            $table->text('policyData');
        });
        Schema::table('invoices', function (Blueprint $table) {
            $table->text('included')->nullable();
        });
        Schema::table('invoices', function (Blueprint $table) {
            $table->text('importedFrom')->nullable();
        });
        Schema::table('invoices', function (Blueprint $table) {
            $table->text('validationNumber')->nullable();
        });
        Schema::table('invoices', function (Blueprint $table) {
            $table->text('importsDesc')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table->dropColumn('vat');
        });
        Schema::table('invoices', function (Blueprint $table) {
            $table->dropColumn('clientName');
        });
        Schema::table('invoices', function (Blueprint $table) {
            $table->dropColumn('policyData');
        });
        Schema::table('invoices', function (Blueprint $table) {
            $table->dropColumn('included');
        });
        Schema::table('invoices', function (Blueprint $table) {
            $table->dropColumn('importedFrom');
        });
        Schema::table('invoices', function (Blueprint $table) {
            $table->dropColumn('validationNumber');
        });
        Schema::table('invoices', function (Blueprint $table) {
            $table->dropColumn('importsDesc');
        });
    }
}
