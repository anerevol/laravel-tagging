<?php
/**
 * Created by PhpStorm.
 * User: anerevol
 * Date: 07/06/2017
 * Time: 11:01 AM
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class TableCenterId extends Migration {

    public function up()
    {

        Schema::table('tagging_tags', function ($table) {
            $table->bigInteger('center_id')->nullable();
        });

        Schema::table('tagging_tag_groups', function ($table) {
            $table->bigInteger('center_id')->nullable();
        });

    }


    public function down()
    {
        Schema::table('tagging_tags', function ($table) {
            $table->dropColumn('center_id');
        });

        Schema::table('tagging_tag_groups', function ($table) {
            $table->dropColumn('center_id');
        });
    }
}
