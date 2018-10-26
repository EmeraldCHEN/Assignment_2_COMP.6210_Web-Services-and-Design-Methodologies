<?php include(APPROOT . "/views/includes/header_contact.php"); ?>   
<link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.0/mapsjs-ui.css?dp-version=1533195059" />
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-core.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-service.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-ui.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-mapevents.js"></script>
    
<!-------------------------------------------- Navigation  ---------------------------->

<?php include(APPROOT . "/views/includes/navigation.php"); ?>
 
       
<!---------------------------- Contact Form -------------------------------------------------------------------------->
       <div class="row">
            <div class="col">
                <br>
                <a href="<?php echo URLROOT; ?>homepage" class="topLeft"> Home</a>/<a class="umf">  Contact</a>     
            </div>     
       </div>
        <div class="row forms">
           
            <div class="col-sm-2"></div>          
            
            <div class="col-sm-3">
                <br>
                <h1 style="text-align:center"> Contact Us</h1> <br>
                <form action="<?php echo URLROOT . 'contact/addContact/'; ?>" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder=" Enter your first name" id="fname" name="fname" required autofocus>                   
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder=" Enter your last name" id="lname" name="lname" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder=" Enter your email " id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder=" Enter your contact No. " id="contactno" name="contactno" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder=" Enter your country " id="counry" name="country" required>
                        </div>
                    
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder=" Enter subject " id="csubject" name="csubject" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="msg" name="msg" rows="10" cols="25" placeholder=" Message ... " required></textarea>
                        </div>         
                        <input onclick="toggle_invisibility('thanks');" type="reset" class="reset">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                        <input  onclick="send()" type="submit" name="submit" id="submit" value="Send" class="send"><br><br>
                        <h5 id="thanks" style="text-align:center"></h5>
                </form><br>
            </div>
            <div class="col-sm-2"></div>
            
        <!---------------------------- Live map & Socila media feed -------------------------------------------------------------------------->
       
        <div class="col-sm-4" >
            <br><br><br><br>
            <div id="map" style="min-width: 100%;  height: 388px; background: white" > </div>
            <ul class="media">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul><br><br>
            
        </div>
       <div class="col-sm-1"></div>
    </div>
   <style> 
       /************************** Social media feeds *******************************************************************/
        
.media{
    width: 80%;
    transform: translate(-50%, -50%);
    margin-left: 32%;
    margin-top: 20%;
    padding: 0;
    display: flex;
}
@media screen and (min-width:188px) and (max-width:922px){
  
    .media{

        display: block;
        margin-left: 62%;
        margin-top: 66%;
        padding:0;
            }
}
.media li{
list-style: none;
margin: 10%;

}
.media li .fa{
font-size: 40px;
color: #262626;
line-height: 80px;
transition: .5s;

}
.media li a{
position: relative;
display: block;
width: 80px;
height: 80px;
background-color: #fff;
text-align: center;
transform: perspective(100px) rotate(-30deg) skew(25deg) translate(0,0);
transition: .5s;
box-shadow: -20px 20px 10px rgb(0, 0, 0, 0.5);
}
.media li a::before{
content: "";
position: absolute;
top: 10px;
left: -20px;
height: 100%;
width: 20px;
background: #b1b1b1;
transition: .5s;
transform: rotate(0deg) skewY(-45deg);
}
.media li a::after{
content: "";
position: absolute;
top: 80px;
left: -11px;
height: 20px;
width: 100%;
background: #b1b1b1;
transition: .5s;
transform: rotate(0deg) skewX(-45deg);
}
.media li a:hover{
transform: perspective(1000px) rotate(-30deg) skew(25deg) translate(20px, -20px);
box-shadow: -50px 50px 50px rgb(0, 0, 0, 0.5);
}
.media li:hover .fa{
color: #fff;
}
.media li a:hover{
transform: perspective(1000px) rotate(-30deg) skew(25deg) translate(20px, -20px);
box-shadow: -50px 50px 50px rgb(0, 0, 0, 0.5);
}
.media li:hover:nth-child(1) a{
background: #3b5999;
}

.media li:hover:nth-child(1) a:before{
background: #2e4a86;
}
.media li:hover:nth-child(1) a:after{
background: #4a69ad;
}
.media li:hover:nth-child(2) a{
background: #55acee;
}
.media li:hover:nth-child(2) a:before{
background: #4184b7;
}
.media li:hover:nth-child(2) a:after{
background: #4d9fde;
}
.media li:hover:nth-child(3) a{
background: #dd4b39;
}

.media li:hover:nth-child(3) a:before{
background: #c13929;
}
.media li:hover:nth-child(3) a:after{
background: #e83322;
}

</style> 
 

 

<!---------------------------- Display Data ----------------------------> 

<div class="row">
    <div class="col-sm-12">
        <h4 style="text-align: center;background:lightpink;"><?php echo $data['title']; ?></h4>
   
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="myheader">
                    <tr>
                        <th>#</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Contact No.</th>
                        <th>Country</th>
                        <th>Subject</th>
                        <th>Message</th>
                    </tr>
                </thead>
            <tbody>
                <?php 
                
                    $output = " ";
                    foreach($data['contact'] as $item) {
                        
                          $output .= "<tr><td>";
                          $output .= $item['ID'];
                          $output .= "</td><td>";
                          $output .= $item['FNAME'];
                          $output .= "</td><td>";
                          $output .= $item['LNAME'];
                          $output .= "</td><td>";
                          $output .= $item['EMAIL'];
                          $output .= "</td><td>";
                          $output .= $item['CONTACTNO'];
                          $output .= "</td><td>";
                          $output .= $item['COUNTRY'];
                          $output .= "</td><td>";
                          $output .= $item['CSUBJECT'];
                          $output .= "</td><td>";
                          $output .= $item['MSG'];
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

<!------------------------------------------Form &  HERE map JS-------------------------------------------------------------------------->   

<script>
function send() {
   document.getElementById("thanks").innerHTML = "Thank you!";
}   

 function toggle_invisibility(id) {
       var e = document.getElementById(id);
          e.style.display = 'none';
    }

function moveMapToAuckland(map){
  map.setCenter({lat:-36.8485, lng:174.7633});
  map.setZoom(14);
}

var platform = new H.service.Platform({
  app_id: 'devportal-demo-20180625',
  app_code: '9v2BkviRwi9Ot26kp2IysQ',
  useHTTPS: true
});
var pixelRatio = window.devicePixelRatio || 1;
var defaultLayers = platform.createDefaultLayers({
  tileSize: pixelRatio === 1 ? 256 : 512,
  ppi: pixelRatio === 1 ? undefined : 320
});

      
var map = new H.Map(document.getElementById('map'),
  defaultLayers.normal.map, {pixelRatio: pixelRatio});

      
var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));


var ui = H.ui.UI.createDefault(map, defaultLayers);


moveMapToAuckland(map);



  </script>
<?php include(APPROOT . "/views/includes/footer.php"); ?>

