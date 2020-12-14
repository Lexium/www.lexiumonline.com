<style type="text/css">
    
     .container{
          padding: 5% 1%;
     }
     .carousel-item{
        background-color: #fff!important;
     }

     .tarjeta{
        padding: 3%;
     }

     .tarjeta a{
       text-decoration: none;
       color: #000;
     }

     .card{
        background-color: transparent!important;
        border: none!important;
     }

     .card-text{
        padding-top: 5%;
     }

     .carousel-indicators li{
         background-color: #27beef;
     }

     .clogos{
        display: none;
     }

     @media (max-width:780px){
         .carousel{
            display: none;
         }

         .clogos{
            display: block;
         }

     }

</style>

<div class="container">
      <h1 style="text-align: center;">Alianzas Estratégicas</h1>
      <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
      </ol>
      <!--/.Indicators-->
      
      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">

             <div class="row">  
                  <div class="col-md-4 tarjeta">
                      <a href="https://red-larousse.com.mx/" target="_blank">
                         <img class="card-img-top" src="images/alianzas/<?php lang('alianza02');?>"alt="<?php lang('alianza01');?>">
                         <p class="card-text"><?php lang('alianza03');?></p>
                      </a>
                  </div>

                  <div class="col-md-4 clearfix d-none d-md-block tarjeta">
                       <a href="https://www.potentor.com.mx/" target="_blank">
                          <img class="card-img-top" src="images/alianzas/<?php lang('alianza14');?>"alt="<?php lang('alianza13');?>">
                          <p class="card-text"><?php lang('alianza15');?></p>
                       </a>
                  </div>
            
                  <div class="col-md-4 clearfix d-none d-md-block tarjeta">
                       <a href="http://sea.anahuac.mx/" target="_blank">
                          <img class="card-img-top" src="images/alianzas/<?php lang('alianza05');?>"alt="<?php lang('alianza04');?>">
                          <p class="card-text"><?php lang('alianza06');?></p>
                       </a>
                  </div>
             </div>
        </div>
        <!--/.First slide-->
      </div>
      <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->
</div>