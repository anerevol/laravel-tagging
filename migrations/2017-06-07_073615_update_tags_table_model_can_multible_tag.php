<?php
/**
 * Created by PhpStorm.
 * User: anerevol
 * Date: 07/06/2017
 * Time: 11:01 AM
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class TableModelCanMultibleTag extends Migration {

    public function up()
    {

        Schema::table('tagging_tags', function ($table) {
            $table->integer('status')->default(1);
        });

        Schema::table('tagging_tagged', function ($table) {
            $table->integer('count')->unsigned()->default(1);
        });

        Schema::table('tagging_tag_groups', function ($table) {
            $table->integer('display_format')->unsigned()->default(1);
        });

    }


    public function down()
    {
        Schema::table('tagging_tags', function ($table) {
            $table->dropColumn('status');
        });

        Schema::table('tagging_tagged', function ($table) {
            $table->dropColumn('count');
        });


        Schema::table('tagging_tag_groups', function ($table) {
            $table->dropColumn('display_format');
        });
    }
}
