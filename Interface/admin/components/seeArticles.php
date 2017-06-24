<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Ver artigos publicados</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div id="ver_tópicos">
    <div class="col-lg-8 col-md-8 col-sd-8">

        <div class="row">

            <?php

            for($i = 0; $i < count($plantList); $i++) {

                echo("
                          
                          <div class=\"visible-lg-inline-block col-lg-4 col-md-4 col-sm-4 text-center\">
                            <img src=\"../../img/".$plantList[$i]['id_plantas'].".png"."\"<br>
                            <label class=\"\">".$plantList[$i]['nome_planta']."</label>
                        </div>
                          
                          ");

            }

            ?>


        </div>


        </div>
</div>
