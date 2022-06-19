<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrasis', function (Blueprint $table) {
            $table->id();
            $table->string('idNumber', 20);
            $table->string('fullname', 100);
            $table->enum('gender', ['male', 'female']);
            $table->enum('citizenshipType', ['WNI', 'WNA']);
            $table->string('citizenship', 50);
            $table->enum('IDType', ['KTP', 'Passport'])->default('KTP');
            $table->text('address');
            $table->string('lastEduBg', 100);
            $table->string('religion', 50);
            $table->enum('maritalStatus', ['single', 'married', 'divorcee']);
            $table->string('motherMaidenName', 100);
            $table->string('pob', 50);
            $table->date('dob');
            $table->string('hobby', 50);
            $table->string('noTelp', 20);
            $table->string('email', 100);
            $table->dateTime('schedule');
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
        Schema::dropIfExists('registrasis');
    }
};
