<?php include(APPROOT . "/views/includes/header_about_feedback.php"); ?>   

    
<!-------------------------------------------- Navigation  ---------------------------->

<?php include(APPROOT . "/views/includes/navigation.php"); ?>
        
<!---------------------------- Feedback Form ---------------------------->   
    <div class="row">
            <div class="col">
                <br>
                <a href="<?php echo URLROOT; ?>homepage" class="topLeft"> Home</a>/<a class="umf">  Login</a>     
            </div>     
    </div>     

    <div class="row forms">
            <div class="col-md-4"></div>

            <div class="col-md-4">
                    <br>
                    <h1 style="text-align:center"> Log In </h1>               
                    <br>
                    <form class="form" action="<?php echo URLROOT . 'Feedback/addFeedback'; ?>" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder=" Enter first name" id="fname" name="fname" required>                   
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder=" Enter last name" id="lname" name="lname" required>
                        </div >
                      
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder=" Enter email " id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder=" Enter contact No. " id="contact" name="contact" required>
                        </div>
                                                           
                        <input type="reset" class="reset">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="submit" name="submit" id="submit" value="Send" class="send"><br><br>
                      
                    </form> 
                
                    <br>                 
                   
            </div>
            <div class="col-md-4"></div>
            
    </div>

<?php include(APPROOT . "/views/includes/music.php"); ?>

<?php include(APPROOT . "/views/includes/footer.php"); ?>