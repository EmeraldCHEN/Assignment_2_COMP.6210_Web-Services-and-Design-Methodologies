<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?php include(APPROOT . "/views/includes/header_product.php"); ?>   

    
<!-------------------------------------------- Navigation  ---------------------------->

<?php include(APPROOT . "/views/includes/navigation.php"); ?>
        

<!------------------------ Products  -------------------------------------------------------------->
  <div class="row">
            <div class="col">
                <br>
                <a href="<?php echo URLROOT; ?>homepage" class="topLeft"> Home</a>/<a class="umf">  Manuka Honey UMF18+</a>     
            </div>     
    </div>
    <div class="container">
        <div class="row">
        <div class="col-sm-4"></div> 
        <div class="col-sm-4"> 
        <br><br>
        <h2 style="font-family:Verdana;text-align: center;">Manuka Honey</h2>
        <h4 style="font-family:Verdana;text-align: center;">Unique Manuka Factor 18+</h4>
        <br><br>
        </div>
        <div class="col-sm-4"></div> 
        </div>
        <div class="row product"> 
        <?php
            foreach($data["honey"] as $umf18) {
            ?>
            <div class="col-sm-6">
                <br>
                <div class="tiles">                  
                    <div class="tile" data-scale="2.0" data-image="<?php echo URLROOT . "images/" . $umf18["IMAGE"] . ".PNG" ?>" alt="#" >
                    </div>
                </div>
                <div class="htz">HOVER TO ZOOM</div>
            </div>
            <div class="col-sm-6">
                    <br><br> 
                    <h4>&nbsp <?php echo $umf18['WEIGHT'] ?></h4>  
                    <br>
                    <h4><div class="price"><?php echo $umf18['PRICE'] ?></div></h4> <br>
                    <h6><button class="priceBtn"><strong>ORDER</strong> </button></h6>                
            </div>
            <?php
            }
            ?>
        </div>
        <br>
        <br>           
                       
</div>          
            
   
<!------------------------- news ticker  --------------------------- ----------------------------------->

<?php include(APPROOT . "/views/includes/newsTicker.php"); ?> 

 <!-- *******************************************   jQuery    ***************************************************--> 
  
<script>        
        
  $('.tile')
    // tile mouse actions
    .on('mouseover', function(){
      $(this).children('.photo').css({'transform': 'scale('+ $(this).attr('data-scale') +')'});
    })
    .on('mouseout', function(){
      $(this).children('.photo').css({'transform': 'scale(1)'});
    })
    .on('mousemove', function(e){
      $(this).children('.photo').css({'transform-origin': ((e.pageX - $(this).offset().left) / $(this).width()) * 100 + '% ' + ((e.pageY - $(this).offset().top) / $(this).height()) * 100 +'%'});
    })
    
    // tiles set up
    .each(function(){
      $(this)
        // add a photo container
        .append('<div class="photo"></div>')
      
        // some text just to show zoom level on current item in this example
        .append('<div class="txt"><div class="x">'+ $(this).attr('data-scale') +'x</div>ZOOM ON<br>HOVER</div>')
      
        // set up a background image for each tile based on data-image attribute
        .children('.photo').css({'background-image': 'url('+ $(this).attr('data-image') +')'});
    })
    </script>       

<?php include(APPROOT . "/views/includes/footer.php"); ?>