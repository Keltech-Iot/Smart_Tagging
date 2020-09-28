<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InitDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('PatchPanels', function (Blueprint $table) {
     
            $table->increments('id');
            $table->string('panel_name')->unique();
            $table->string('status');
            $table->string('Screen_disp');
            $table->string('location');
            $table->string('port_type');
            $table->string('nfc')->unique();
            
            $table->timestamps();
     });

      Schema::create('Cables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cable_id')->unique();
            $table->string('nfc_id')->unique();
            $table->string('cable_type');
            $table->string('fibre_type');
            $table->string('function');
            $table->string('status');
            $table->string('junction_id');
            $table->string('upstream_info');
            $table->string('downstream_info');
            $table->timestamps();
      });

      Schema::create('FibrePorts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('panel_id')->unique();
            $table->string('cable_id');
            $table->string('port_id');
            $table->string('circuit_info');
            $table->string('fibre_name');
            $table->string('function');
            $table->string('customer_ref');
            $table->string('bandwidth');

            $table->timestamps();
      });

       Schema::create('Splitters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('splitter_name');
            $table->string('main_exchange');
            $table->string('type');
            $table->string('wp_name');
            $table->string('fixation_point');
            $table->timestamps();
        });


        Schema::create('Manholes', function (Blueprint $table){
            $table->increments('id');
            $table->string('manhole_id')->unique();
            $table->string('funct');
            $table->string('type');
            $table->string('location');
            $table->string('digi_id');
            $table->float('lat', 10, 6);
            $table->float('long', 10, 6);
            $table->timestamps();
        });

        Schema::create('Aerial_Networks', function (Blueprint $table){
            $table->increments('id');
            $table->string('aerial_id')->unique();
            $table->string('funct');
            $table->string('location');
            $table->string('digi_id');
            $table->float('lat', 10, 6);
            $table->float('long', 10, 6);
            $table->timestamps();
        });

        Schema::create('Joint_Closures', function(Blueprint $table){
            $table->increments('id');
            $table->string('closure_id')->unique();
            $table->string('nfc')->unique();
            $table->string('exchange');
            $table->string('type');
            $table->string('position');
            $table->string('position_id');
            $table->timestamps();
        });

        Schema::create('ClosureFibres', function(Blueprint $table){
            $table->increments('id');
            $table->string('fibre_upstream');
            $table->string('closure_id');
            $table->string('tray_number');
            $table->string('upstream_cable');
            $table->string('downstream_cable');
            $table->string('fibre_downstream');
            $table->string('upstreamData');
            $table->string('downstreamData');
            $table->timestamps();
        });

        Schema::create('QA_Trays', function(Blueprint $table){
            $table->increments('id');
            $table->string('QA_id')->unique();
            $table->string('job_id');
            $table->string('manhole_id');
            $table->string('tray_number');
            $table->string('tray_pic_loc');
            $table->string('com_pic_loc');
            $table->string('digital_sign');
            $table->string('closure_id');
            $table->string('AdInfo');
            $table->timestamps();
        });

        Schema::create('QA_Panels', function(Blueprint $table){
            $table->increments('id');
            $table->string('QA_id')->unique();
            $table->string('job_id');
            $table->string('panel_id');
            $table->string('port_number');
            $table->string('terminal_pic_loc');
            $table->string('com_pic_loc');
            $table->string('digital_sign');
            $table->string('AdInfo');
            $table->timestamps();
        });

        Schema::create('QA_WPs', function(Blueprint $table){
            $table->increments('id');
            $table->string('QA_id')->unique();
            $table->string('job_id');
            $table->string('WP_id');
            $table->string('WP_type');
            $table->string('com_pic_loc');
            $table->string('digital_sign');
            $table->string('AdInfo');
            $table->timestamps();
        });

        Schema::create('Work_Orders', function(Blueprint $table){
            $table->increments('id');
            $table->string('job_id')->unique();
            $table->string('proj_id');
            $table->text('jobDes');
            $table->string('location');
            $table->string('planner');
            $table->string('tech');
            $table->string('customer');
            $table->string('component_type');
            $table->string('product_type');
            $table->string('product_id');
            $table->string('cert');
            $table->string('custNotes');
            $table->string('status');
            $table->timestamps();
        });

        Schema::create('Projects', function(Blueprint $table){
            $table->increments('id');
            $table->string('proj_id')->unique();
            $table->text('proj_des');
            $table->string('location');
            $table->string('area');
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
        Schema::dropIfExists('PatchPanels');
        Schema::dropIfExists('FibrePorts');
        Schema::dropIfExists('Cables');
        Schema::dropIfExists('Terminals');
        Schema::dropIfExists('Manholes');
        Schema::dropIfExists('Joint_Closures');
        Schema::dropIfExists('ClosureFibres');
        Schema::dropIfExists('QA_Trays');
        Schema::dropIfExists('QA_Panels');
        Schema::dropIfExists('Work_Orders');
        Schema::dropIfExists('Projects');
    }
}
