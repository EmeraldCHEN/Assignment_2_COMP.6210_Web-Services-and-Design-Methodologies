<?php include(APPROOT . "/views/includes/header_about_feedback.php"); ?>   

    
<!-------------------------------------------- Navigation  ---------------------------->

<?php include(APPROOT . "/views/includes/navigation.php"); ?>
        
<!---------------------------- Feedback Form ---------------------------->   
    <div class="row">
            <div class="col">
                <br>
                <a href="<?php echo URLROOT; ?>homepage" class="topLeft"> Home</a>/<a class="umf">  Feedback</a>     
            </div>     
    </div>     

    <div class="row forms">
            <div class="col-md-4"></div>

            <div class="col-md-4">
                    <br>
                    <h1 style="text-align:center"> Feedback </h1>               
                    <br>
                    <form class="form" action="<?php echo URLROOT . 'Feedback/addFeedback'; ?>" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder=" Enter first name" id="fname" name="fname" required>                   
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder=" Enter last name" id="lname" name="lname" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder=" Enter email " id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder=" Enter contact No. " id="contact" name="contact" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="message" name="message" rows="10" cols="25" placeholder=" Comment ... " required></textarea>
                        </div>  
                                      
                        <input type="reset" class="reset">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="submit" name="submit" id="submit" value="Send" class="send"><br><br>
                    </form> 
                
                    <br>
                    <div class="form-group">
                        <a href="<?php echo URLROOT . 'feedback'; ?>" >
                        <button class=" feedbackBtn">CLICK &#64; ALL updated Info below the Feedback form</button>
                        </a>
                    </div>
                   
            </div>
            <div class="col-md-4"></div>
            
    </div>

<!---------------------------- Display Data ----------------------------> 

<div class="row">
    <div class="col-sm-12">
        <h3 style="text-align: center;background:lightpink;"><?php echo $data['title']; ?></h3>
        <div class="table-responsive">
        <table class="table table-hover">
            <thead class="myheader">
                <tr>
                    <th>#</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Contact No.</th>
                    <th>Comment</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                
                    $output = "";
                    foreach($data['feedback'] as $item) {
                        
                          $output .= "<tr><td>";
                          $output .= $item['ID'];
                          $output .= "</td><td>";
                          $output .= $item['FNAME'];
                          $output .= "</td><td>";
                          $output .= $item['LNAME'];
                          $output .= "</td><td>";
                          $output .= $item['EMAIL'];
                          $output .= "</td><td>";
                          $output .= $item['CONTACT'];
                          $output .= "</td><td>";
                          $output .= $item['COMMENTS'];
                          $output .= "</td></tr>";
                        
                    } 
                    echo $output;
                ?>
            </tbody>
        </table>
		</div>
        <h5 style="text-align: center;background:lightgreen;">
            <?php echo " ********************* " ?>
        </h5>
    </div>
</div>



<?php include(APPROOT . "/views/includes/music.php"); ?>



<?php include(APPROOT . "/views/includes/footer.php"); ?>