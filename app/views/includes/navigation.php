
<div class="row" id="myNav">
        <div class="col" style="background:crimson">

            <nav class="navbar navbar-expand-xl navbar-default bg-default" >
      
            <a class="navbar-brand" href="<?php echo URLROOT; ?>homepage"><i class="fa fa-home"></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span >
                    <a href="javascript:void(0);" class="icon" onclick="responsiveNav()">
                    <div class="menuIcon" onclick="animatedMenuIcon(this)">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                    </a>

                </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URLROOT; ?>about">About</a>
                    </li>
     
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manuka Honey</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo URLROOT; ?>honey/umf_5">UMF 5+ </a>
                        <a class="dropdown-item" href="<?php echo URLROOT; ?>honey/umf_8">UMF 8+ </a>
                        <a class="dropdown-item" href="<?php echo URLROOT; ?>honey/umf_10">UMF 10+ </a>
                        <a class="dropdown-item" href="<?php echo URLROOT; ?>honey/umf_15">UMF 15+ </a>
                        <a class="dropdown-item" href="<?php echo URLROOT; ?>honey/umf_16">UMF 16+ </a>
                        <a class="dropdown-item" href="<?php echo URLROOT; ?>honey/umf_18">UMF 18+ </a>
                        <a class="dropdown-item" href="<?php echo URLROOT; ?>honey/umf_20">UMF 20+ </a>
                        <a class="dropdown-item" href="<?php echo URLROOT; ?>honey/mgo_550">MGO 550+ </a>
                        <a class="dropdown-item" href="<?php echo URLROOT; ?>honey/plain">Plain Manuka Honey</a>
                        <a class="dropdown-item" href="<?php echo URLROOT; ?>honey/blend">Manuka Blend Honey</a>
                    </div>
                    </li>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                </ul>
                <a href="<?php echo URLROOT; ?>signup"><button class="navBtn" >SIGNUP</button></a> 
                <a class="nav-link" href="<?php echo URLROOT; ?>honey/mgo_550"><i class="fa fa-shopping-cart"></i> </a>
            </div>

            </nav>
        </div>
    </div>



<!---------------------- Style Navigation ---------------------------------------->   
<style>
.navbar-default{
    background-color:crimson; 
    font-size: 160%;
}
.navbar .navbar-brand{
    font-size: 130%;
    color:white;
}
.navbar .navbar-brand:hover,
.fa-shopping-cart:hover {
  color:gold;
}

.navbar .nav-link {
  color:white;
}
.navbar .nav-link:hover {
  color:black;
}
.btn-outline-success
{
  color:black;
  font-size: 58%;
  border-color:dimgray;
}
.btn-outline-success:hover,
.btn-outline-success:focus
{
    color:white;
    background-color: crimson; 
}
.navbar-toggler span{
    color:dimgray; 
}
.navbar .fa-shopping-cart{
    font-size: 130%;
}
.navBtn{
    border-radius: 50px;
    background-color: crimson;
    background: linear-gradient(to bottom right,red,gold);
    color: white;
    font-size: 80%;
    margin-right: 1%;
    text-align: center;
}
.navBtn:hover{
    color: black;
}
.bar1, .bar2, .bar3 {
    width: 28px;
    height: 3px;
    background-color: #333;
    margin: 6px 0;
    transition: 0.4s;
}
.menuIcon {
    display: inline-block;
    cursor: pointer; 
}
.change .bar1 {
    -webkit-transform: rotate(-45deg) translate(-9px, 6px);
    transform: rotate(-45deg) translate(-7px, 5px);
}
.change .bar2 {
    opacity: 0;
}
.change .bar3 {
    -webkit-transform: rotate(45deg) translate(-8px, -8px);
    transform: rotate(45deg) translate(-6px, -6px);
}      
.nav-item .dropdown-item{
    color: crimson;
    font-size: 110%;
    font-weight: bold;
} 
.dropdown-item:active{
      background-color: white;
      color: black;
  }


/*

.centeredText{  
   
    top: 40%;
    left: 10%;
    position: absolute;
    cursor:pointer;       
    font-family:monospace;
    font-size: 422%;
   text-decoration-line:overline underline;
   
    text-decoration-style:dashed;
     animation: colorChange 4s infinite;
}

.centeredText:hover
{
    text-decoration: none;
    color: crimson;
}
.content img { 
    position: relative; 
}


@keyframes colorChange {
    0% {
        color: crimson;
        
        }
    45% {
        color: gold;
        
        }
    75% {
        color:black;
         
        }
    100% {
        color: crimson;
       
        }

}
@media screen and (min-width:288px) and (max-width:546px){
    .centeredText{  
                font-size: 288%;          
   
    }
}
@media screen and (min-width:28px) and (max-width:287px){
    .centeredText{  
                font-size: 188%;            
    }
}
*/
.topLeft{
        padding: 1%;
        color: #333;
}
.send{
        
        cursor: pointer;
        text-align: center;
        font-size: 130%;
        color: #fff;
        background-color: crimson;
        border: none;
        border-radius: 15px;
        box-shadow: 0 6px #999;
}
.send:hover{
        color: black;
}
.reset{
    cursor: pointer;
    margin-left: 18%;
    border-radius: 15px;
    font-size: 120%;
    box-shadow: 0 4px #999;
}
.reset:hover{
    background-color: gold;
}
       
</style> 