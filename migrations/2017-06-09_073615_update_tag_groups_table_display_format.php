<?php
/**
 * Created by PhpStorm.
 * User: anerevol
 * Date: 07/06/2017
 * Time: 11:01 AM
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class GroupsTableDisplayFormat extends Migration {

    public function up()
    {

        Schema::table('tagging_tag_groups', function ($table) {
            $table->string('display_format')->nullable()->change();
        });
    }


    public function down()
    {
        Schema::table('tagging_tags', function ($table) {
            $table->integer('display_format')->nullable()->change();
        });
    }
}
