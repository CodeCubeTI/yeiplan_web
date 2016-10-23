<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',50);
            $table->string('code',10)->nullable();
            $table->string('abbreviation',10)->nullable();
            $table->timestamps();
        });

        /*States seeders of México*/
        \DB::table('states')->insert([
            [ 'id' => 1, 'name' => 'Aguascalientes', 'code'=> '01', 'abbreviation' => 'Ags.'], [ 'id' => 2, 'name' => 'Baja California', 'code'=> '02', 'abbreviation' => 'BC'], [ 'id' => 3, 'name' => 'Baja California Sur', 'code'=> '03', 'abbreviation' => 'BCS'], [ 'id' => 4, 'name' => 'Campeche', 'code'=> '04', 'abbreviation' => 'Camp.'], [ 'id' => 5, 'name' => 'Coahuila de Zaragoza', 'code'=> '05', 'abbreviation' => 'Coah.'], [ 'id' => 6, 'name' => 'Colima', 'code'=> '06', 'abbreviation' => 'Col.'], [ 'id' => 7, 'name' => 'Chiapas', 'code'=> '07', 'abbreviation' => 'Chis.'], [ 'id' => 8, 'name' => 'Chihuahua', 'code'=> '08', 'abbreviation' => 'Chih.'], [ 'id' => 9, 'name' => 'Distrito Federal', 'code'=> '09', 'abbreviation' => 'DF'], [ 'id' => 10, 'name' => 'Durango', 'code'=> '10', 'abbreviation' => 'Dgo.'], [ 'id' => 11, 'name' => 'Guanajuato', 'code'=> '11', 'abbreviation' => 'Gto.'], [ 'id' => 12, 'name' => 'Guerrero', 'code'=> '12', 'abbreviation' => 'Gro.'], [ 'id' => 13, 'name' => 'Hidalgo', 'code'=> '13', 'abbreviation' => 'Hgo.'], [ 'id' => 14, 'name' => 'Jalisco', 'code'=> '14', 'abbreviation' => 'Jal.'], [ 'id' => 15, 'name' => 'México', 'code'=> '15', 'abbreviation' => 'Mex.'], [ 'id' => 16, 'name' => 'Michoacán de Ocampo', 'code'=> '16', 'abbreviation' => 'Mich.'], [ 'id' => 17, 'name' => 'Morelos', 'code'=> '17', 'abbreviation' => 'Mor.'], [ 'id' => 18, 'name' => 'Nayarit', 'code'=> '18', 'abbreviation' => 'Nay.'], [ 'id' => 19, 'name' => 'Nuevo León', 'code'=> '19', 'abbreviation' => 'NL'], [ 'id' => 20, 'name' => 'Oaxaca', 'code'=> '20', 'abbreviation' => 'Oax.'], [ 'id' => 21, 'name' => 'Puebla', 'code'=> '21', 'abbreviation' => 'Pue.'], [ 'id' => 22, 'name' => 'Querétaro', 'code'=> '22', 'abbreviation' => 'Qro.'], [ 'id' => 23, 'name' => 'Quintana Roo', 'code'=> '23', 'abbreviation' => 'Q. Roo'], [ 'id' => 24, 'name' => 'San Luis Potosí', 'code'=> '24', 'abbreviation' => 'SLP'], [ 'id' => 25, 'name' => 'Sinaloa', 'code'=> '25', 'abbreviation' => 'Sin.'], [ 'id' => 26, 'name' => 'Sonora', 'code'=> '26', 'abbreviation' => 'Son.'], [ 'id' => 27, 'name' => 'Tabasco', 'code'=> '27', 'abbreviation' => 'Tab.'], [ 'id' => 28, 'name' => 'Tamaulipas', 'code'=> '28', 'abbreviation' => 'Tamps.'], [ 'id' => 29, 'name' => 'Tlaxcala', 'code'=> '29', 'abbreviation' => 'Tlax.'], [ 'id' => 30, 'name' => 'Veracruz de Ignacio de la Llave', 'code'=> '30', 'abbreviation' => 'Ver.'], [ 'id' => 31, 'name' => 'Yucatán', 'code'=> '31', 'abbreviation' => 'Yuc.'], [ 'id' => 32, 'name' => 'Zacatecas', 'code'=> '32', 'abbreviation' => 'Zac.']
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('states');
    }
}
