<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->required();
            $table->string('last_name')->required();
            $table->string('gender')->nullable();
            $table->string('mobile')->required();
            $table->string('email')->nullable();
            $table->foreignId('company_id')->constrained('companies');
            $table->unsignedTinyInteger('status')->comment('1: active, 2: resigned, 3: suspended');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
}

