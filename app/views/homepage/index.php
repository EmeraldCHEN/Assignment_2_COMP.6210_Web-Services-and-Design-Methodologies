<?php include(APPROOT . "/views/includes/header_homepage.php"); ?>

<!---------- LOGO with headline at the top center ------------------------>
                
    <div class="top-logo">
        <h1 class="largeFont">Finest Manuka Honey <img src="<?php echo URLROOT; ?>Images/logo.PNG" alt="logo" ></h1>
        <div class="smallerFont">from</div> 
        <h1 class="largeFont">New Zealand</h1>               
    </div>

<!---------- Introductory paragraph ------------------------>  
<div class="container" >
    <div class="card bg-light text-dark">
        <div class="card-body">
            <p> The purpose of this eCommerce site is to convince website visitors that they should shop online to order some genuinely New Zealand made Manuka Honey.</p> 
            <P>This website is used for a start-up company named FMH Ltd. based in Auckland, New Zealand, presenting a collection of products, services and other files.</P>
            <p>Creating this website could give the company a chance to gain more clients that can help their business grow. </p>
            <p>Cosidering that people don’t like to read these days,
            the goal then is to make sure user’s needs are clearly displayed in a visually compelling manner, 
            and a good user experience in terms of understanding the offer and completing a transaction.</p>
        </div>
    </div>
</div>
<br>
<br>   
<!------------------- Scroll 4 more ... ------------------------->
                
    <div class="scroll">
        <div class="scrollText">SCROLL FOR MORE</div>
        <div class="arrow">&darr;</div>                
    </div>
    
<!-------------------------------------------- Navigation  ---------------------------->
<?php include(APPROOT . "/views/includes/navigation.php"); ?>
    
        
     <!---------------------------- Content  ---------------------------->   
        <div class="content ">
            <div class="row">
                <div class="col">
                    <img class="img-fluid" src="<?php echo URLROOT; ?>images/PureHoney.JPG" alt="Pure Honey">
                </div>
                <div class="col">
                    <a href="<?php echo URLROOT; ?>honey/umf_5"" class="centeredText"> SHOP NOW </a>
                   <!-- <div class="arrowRight">&rarr;</div>                
                   --> 
                    
                </div>
            </div>


<?php include(APPROOT . "/views/includes/footer.php"); ?>