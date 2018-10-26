<?php include(APPROOT . "/views/includes/header_contact.php"); ?>   
<link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.0/mapsjs-ui.css?dp-version=1533195059" />

    
<!-------------------------------------------- Navigation  ---------------------------->

<?php include(APPROOT . "/views/includes/navigation.php"); ?>
 
       <div class="row">
            <div class="col">
                <br>
                <a href="<?php echo URLROOT; ?>homepage" class="topLeft"> Home</a>/<a class="umf">  FAQ</a>     
            </div>     
       </div>
<!---------------------------- Contact Form -------------------------------------------------------------------------->
        <div class="row forms">
           
            <div class="col-md-2"></div>          
            
            <div class="col-md-4">
                <br>
                <h1 style="text-align:center"> FAQ</h1> 
                <br>
                <p class="text-center">**************************************************</p>
                <p class="text-center">**************************************************</p>
                <p class="text-center">**************************************************</p>
                <p class="text-center">**************************************************</p>
                <p class="text-center">**************************************************</p>
                <p class="text-center">**************************************************</p>
                <p class="text-center">**************************************************</p>
                <p class="text-center">**************************************************</p>
                <p class="text-center">**************************************************</p>
                <p class="text-center">**************************************************</p>
                <p class="text-center">**************************************************</p>
                <p class="text-center">**************************************************</p>
            </div>
            <div class="col-md-1">
                
            </div>
            
        <!---------------------------- image  on the right side------------------------------------------------------>
       
            <div class="col-md-3" >
                <br><br><br><br>
                <div>
                <picture>
                    <source srcset="<?php echo URLROOT; ?>images/smallerFlower.PNG" media="(max-width: 800px)">
                    <source srcset="<?php echo URLROOT; ?>images/flower.PNG">
                    <img src="<?php echo URLROOT; ?>images/flower.PNG" alt="Flowers" style="width:auto;">
                </picture>
                
                </div>         
            </div>
            <div class="col-md-2"></div>
    </div>
 


<?php include(APPROOT . "/views/includes/footer.php"); ?>