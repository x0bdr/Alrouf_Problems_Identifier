<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Auth_Table
        Schema::create('Auth_Table', function (Blueprint $table) {
            $table->integer('deviceID')->nullable();
            $table->string('deviceLocation', 50)->nullable();
            $table->string('clientName', 50)->nullable();
            $table->string('APIKey', 100)->nullable();
            $table->integer('deviceStatus')->default(0);
            $table->integer('networkStatus')->default(0);
        });

        // Clients_Table
        Schema::create('Clients_Table', function (Blueprint $table) {
            $table->integer('clientID');
            $table->string('clientName', 50);
            $table->string('clientContactName', 100);
            $table->string('clientContactPhone', 15);
            $table->string('clientContactEmail', 100);
        });

        // Data_Table
        Schema::create('Data_Table', function (Blueprint $table) {
            $table->integer('dataID');
            $table->integer('deviceID');
            $table->integer('registerationDeviceID');
            $table->integer('sesnorID');
            $table->string('sensorName', 10);
            $table->string('sensorReadingsNames', 500);
            $table->string('sensorReadingsValues', 500);
        });

        // Users_Table
        Schema::create('Users_Table', function (Blueprint $table) {
            $table->integer('userID');
            $table->string('userName', 50);
            $table->string('password', 50);
            $table->string('name', 50);
            $table->string('email', 100);
            $table->string('phone', 15);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Auth_Table');
        Schema::dropIfExists('Clients_Table');
        Schema::dropIfExists('Data_Table');
        Schema::dropIfExists('Users_Table');
    }
}
