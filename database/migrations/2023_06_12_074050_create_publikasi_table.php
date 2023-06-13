<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublikasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publikasi', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('pub_id')->nullable();
            $table->string('no_rak')->nullable();
            $table->string('domain')->nullable();
            $table->string('status_website')->nullable();
            $table->dateTime('last_scan')->nullable();
            $table->date('release_date')->nullable();
            $table->text('abstract')->nullable();
            $table->string('cover')->nullable();
            $table->string('pdf')->nullable();
            $table->string('qrcode', 10)->nullable();
            $table->string('source', 2)->nullable();
            // 1 BPS Provinsi
            // 2 BPS Pusat
            // 3 OPD
            // 4 Swasta
            // 5 lainnya
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('publikasi');
    }
}
