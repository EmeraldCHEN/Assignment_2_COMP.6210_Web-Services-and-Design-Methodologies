<?php include(APPROOT . "/views/includes/header_about_feedback.php"); ?>   

    
<!-------------------------------------------- Navigation  ---------------------------->

<?php include(APPROOT . "/views/includes/navigation.php"); ?>
        
<!---------------------------- Feedback Form ---------------------------->   
    <div class="row">
            <div class="col">
                <br>
                <a href="<?php echo URLROOT; ?>homepage" class="topLeft"> Home</a>/<a class="umf">  Signup</a>     
            </div>     
    </div>     

    <div class="row forms">
            <div class="col-md-4"></div>

            <div class="col-md-4">
                    <br>
                    <h1 style="text-align:center"> Sign Up </h1>               
                    <br>
                    <form class="form" action="<?php echo URLROOT . 'Feedback/addFeedback'; ?>" method="POST">
                        
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder=" Enter registered email address " id="email" name="email" required>
                        </div>
                        <div class="form-group">
                        <input type="checkbox" name="vehicle" value="option"> Remember me
                       
                        </div >
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        <input type="submit" name="submit" id="submit" value="Send" class="send" ><br><br>
                     
                    </form>            
                    <br>                                   
            </div>
            <div class="col-md-4"></div>       
    </div>

<?php include(APPROOT . "/views/includes/music.php"); ?>

<?php include(APPROOT . "/views/includes/footer.php"); ?>