<html>
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Indian Restaurant: About Us</title>

</head>

<body>
    <nav class="navbar navbar-inverse navbar-toggleable-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/Indian/index.html"><img src="img/logo.png" height="30" width="41"></a>
            <div class="collapse navbar-collapse" id="Navbar">

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="/Indian/index.html"><span class="fa fa-home "></span> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Indian/aboutus.html"><span class="fa fa-info "></span> About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Indian/table.html"><span class="fa fa-list "></span> Reserve Table</a></li>
                    <li class="nav-item active"><a class="nav-link" href="/Indian/contactus.html"><span class="fa fa-address-card"></span> Contact</a></li>
                </ul>
                <span class="navbar-text">
                    <a data-toggle="modal" data-target="#loginModal">
                        <span class="fa fa-sign-in"></span> Login </a>
                </span>
            </div>
        </div>
    </nav>  
    <header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-8">
                    <h1>Indian Restaurant</h1>
                    <p>We take inspiration from the World's best cuisines, and create a unique fusion experience. Our lipsmacking creations will tickle your culinary senses!</p>
                </div>
                <div class="col col-sm align-self-center">
                        <img src="img/logo.png" class="img-fluid">
                    </div>
            </div>
        </div>
    </header>

<?php
session_start();
$_SESSION['myValue']="";
$tea = $_POST["bt"];
$coffee=$_POST["cf"];
$ps=$_POST["ph"];
$s=$_POST["sw"];
$nod=$_POST["nd"];
$pp=$_POST["pp"];
$idl=$_POST["ed"];
$kp=$_POST["kp"];
$cp=$_POST["cp"];
$mv=$_POST["mv"];
$dt=$_POST["dt"];
$aj=$_POST["aj"];
$jr=$_POST["jr"];
$bn=$_POST["bn"];
$tr=$_POST["tr"];
$piz=$_POST["cpz"];
$wp=$_POST["wp"];
$vb=$_POST["vb"];
$gb=$_POST["gb"];
$ff=$_POST["ff"];
$cb=$_POST["cb"];
$at=$_POST["at"];
$time=$_POST["time"];
$date=$_POST["date"];

if($tea==0 && $coffee==0 && $ps==0 && $s==0 && $pp==0 && $nod==0 && $idl==0 && $kp==0 && $cp==0 && $mv==0 && $dt==0 && $aj==0 && $jr==0 && $bn==0 && $tr==0 && $piz==0 && $wp==0 && $vb==0 && $gb==0 && $ff==0 && $cb==0 && $at==0)
{
    echo "<script type='text/javascript'>alert('you didn't select any thing');window.location.href='table.html'</script>";
}
else{
echo "<center><table>";    
echo "<h4><u><b>Bill</b></u></h4><br>";
echo "<h3>Date: $date &nbsp Time= $time</h3><br>";
echo "<tr><th> Following Things you odered   &nbsp</th><th>  &nbsp Quantity </th></tr>";

if($tea>0)
{
    echo "<tr><td>Tea </td><td> &nbsp &nbsp$tea</td></tr>";
    $_SESSION['myValue']=$_SESSION['myValue']."  Tea:- ".$tea;
    $tea=30*$tea;
    
    
}
else {$tea=0;}

if($coffee>0)
{
    echo "<tr><td>Coffee  </td><td> &nbsp &nbsp$coffee</td></tr>";
    $_SESSION['myValue']=$_SESSION['myValue']."\n coffee:- ".$coffee;
    $coffee=60*$coffee;
}    
else {$coffee=0;}

if($ps>0)
{
    echo "<tr><td>Poha Jalebi </td><td> &nbsp &nbsp$ps</td></tr>";
    $_SESSION['myValue']=$_SESSION['myValue']."\n Poha And Jalebi:- ".$ps;
    $ps=$ps*50;
}
else {$ps=0;}

if($s>0)
{
    echo "<tr><td> Sandwich </td><td> &nbsp &nbsp$s</td></tr>";
    $_SESSION['myValue']=$_SESSION['myValue']."\n Sandwitch:- ".$s;
    $s=$s*80;
}
else {$s=0;}

if($pp>0)
{
    echo "<tr><td>Paneer Paratha </td><td> &nbsp &nbsp$pp</td></tr>";
    $_SESSION['myValue']=$_SESSION['myValue']."\n Paneer Paratha:- ".$pp;
    $pp=$pp*50;
}
else {$pp=0;}

if($nod>0)
{
    echo "<tr><td>Noodles </td><td> &nbsp &nbsp$nod</td></tr>";
    $_SESSION['myValue']=$_SESSION['myValue']."\n Noodles:- ".$nod;
    $nod=$nod*80;
}
else {$nod=0;}

if($idl>0)
{
    echo "<tr><td>Idli-Dosa </td><td> &nbsp &nbsp$idl</td></tr>";
    $_SESSION['myValue']=$_SESSION['myValue']."\n Idli and Dosa:- ".$idl;
    $idl=$idl*120;
}
else {$idl=0;}

if($kp>0)
{
    echo "<tr><td>Kadhai Panner </td><td> &nbsp &nbsp$kp</td></tr>";
    $_SESSION['myValue']=$_SESSION['myValue']."\n Kadhai Paneer:- ".$kp;
    $kp=$kp*200;
}
else {$kp=0;}

if($cp>0)
{
    echo "<tr><td>Chilli Paneer </td><td> &nbsp &nbsp$cp</td></tr>";
    $_SESSION['myValue']=$_SESSION['myValue']."\n Chilli Paneer:- ".$cp;
    $cp=$cp*160;
}
else {$cp=0;}

if($mv>0)
{
    echo "<tr><td>Mixed Veg </td><td> &nbsp &nbsp$mv</td></tr>";
    $_SESSION['myValue']=$_SESSION['myValue']."\n Mixed Veg:- ".$mv;
    $mv=$mv*150;
}
else {$mv=0;}

if($dt>0)
{
    echo "<tr><td>Dal Tikka </td><td> &nbsp &nbsp$dt</td></tr>";
    $_SESSION['myValue']=$_SESSION['myValue']."\n Dal Tikka:- ".$dt;
    $dt=$dt*140;
}
else {$dt=0;}

if($aj>0)
{
    echo "<tr><td>Aaloo Jeera </td><td> &nbsp &nbsp$aj</td></tr>";
    $_SESSION['myValue']=$_SESSION['myValue']."\n Aaloo Jeera:- ".$aj;
    $aj=$aj*100;
}
else {$aj=0;}

if($jr>0)
{
    echo "<tr><td>Jeera Rice </td><td> &nbsp &nbsp$jr</td></tr>";
    $_SESSION['myValue']=$_SESSION['myValue']."\n Jeera Rice:- ".$jr;
    $jr=$jr*120;
}
else {$jr=0;}

if($bn>0)
{
    echo "<tr><td>Butter Nan </td><td> &nbsp &nbsp$bn</td></tr>";
    $_SESSION['myValue']=$_SESSION['myValue']."\n Butter Nan:- ".$bn;
    $bn=$bn*30;
}
else {$bn=0;}

if($tr>0)
{
    echo "<tr><td>Tanduri Roti </td><td> &nbsp &nbsp$tr</td></tr>";
    $_SESSION['myValue']=$_SESSION['myValue']."\n Tanduri Roti:- ".$tr;
    $tr=$tr*20;
}
else {$tr=0;}

if($piz>0)
{
    echo "<tr><td>Capsicum Pizza </td><td> &nbsp &nbsp$piz</td></tr>";
    $_SESSION['myValue']=$_SESSION['myValue']."\n Capsicum Pizza:- ".$piz;
    $piz=$piz*150;
}
else {$piz=0;}

if($wp>0)
{
    echo "<tr><td> White Pasta </td><td> &nbsp &nbsp$wp</td></tr>";
    $_SESSION['myValue']=$_SESSION['myValue']."\n White Pizza:- ".$wp;
    $wp=$wp*80;
}
else {$wp=0;}

if($vb>0)
{
    echo "<tr><td>Veg Burger </td><td> &nbsp &nbsp$vb</td></tr>";
    $_SESSION['myValue']=$_SESSION['myValue']."\n Veg Burger:- ".$vb;
    $vb=$vb*90;
}
else {$vb=0;}

if($gb>0)
{
    echo "<tr><td>Garlic Bread </td><td> &nbsp &nbsp$gb</td></tr>";
    $_SESSION['myValue']=$_SESSION['myValue']."\n Garlic Bread:- ".$gb;
    $gb=$gb*80;
}
else {$gb=0;}

if($ff>0)
{
    echo "<tr><td>French Fries </td><td> &nbsp &nbsp$ff</td></tr>";
    $_SESSION['myValue']=$_SESSION['myValue']."\n French Fries:- ".$ff;
    $ff=$ff*80;
}
else {$ff=0;}

if($cb>0)
{
    echo "<tr><td>Cheese Balls </td><td> &nbsp &nbsp$cb</td></tr>";
    $_SESSION['myValue']=$_SESSION['myValue']."\n Cheese Balls:- ".$cb;
    $cb=$cb*70;
}
else {$cb=0;}

if($at>0)
{
    echo "<tr><td>Aaloo Tikka </td><td> &nbsp &nbsp$at</td></tr>";
    $_SESSION['myValue']=$_SESSION['myValue']."\n Aaloo Tikka:- ".$at;
    $at=$at*70;
}
else {$at=0;}


}
echo "</table></center>";
$tea=$tea + $coffee + $ps + $s + $pp + $nod + $idl + $kp + $cp +
 $mv + $dt + $aj + $jr + $bn + $tr + $piz + $wp + $vb + $gb + $ff + $cb + $at;
 $_SESSION['myValue']=$_SESSION['myValue']." \nTotal Amount:- ".$tea;
echo "<br><center>Your Total Order Amount is :  Rs ".$tea."<br>";
//echo $_SESSION['myValue'];

if($_POST['guest'] == "one")
echo " Reserved Table No. is 1<br>";
elseif($_POST['guest']=="two")
echo " Reserved Table No. is 2<br>";
elseif($_POST['guest']=="three")
echo " Reserved Table No. is 3<br>";
elseif($_POST['guest']=="four")
echo " Reserved Table No. is 4<br>";
elseif($_POST['guest']=="five")
echo " Reserved Table No. is 5<br>";
elseif($_POST['guest']=="six")
echo " Reserved Table No. is 6<br>";
else
{
    echo "<script type='text/javascript'>alert('you didn't select any table');window.location.href='table.html'</script>";
    
}
echo "<br>Thank You.....!! </center>";
$_SESSION['myValue']=$_SESSION['myValue']."\n Reserved Table No. is ".$_POST['guest'];
?>

<a class="nav-link" href="/Indian/index.html"><span ></span> Go to Home</a>

<footer class="footer raw-footer">
            <div class="container">
                <div class="row">
                    <div class="col-5 offset-1 col-sm-2">
                        <h5>Links</h5>
                        <ul class="list-unstyled">
                            <li><a href="#"> Home</a></li>
                            <li><a href="#">Menu</a></li>
                            <li>
                            <a class="dropdown-item" data-toggle="modal" data-target="#ressign">Employee</a>
                        </li>



                        </ul>
                    </div>
                    <div class="col-6 col-sm-5">
                        <h5>Our Address</h5>
                        <address>
                         Dumna Airport Road<br>
                         IIITDMJ, 482005<br>
                         Jabalpur, India.<br>
                          <i class="fa fa-phone fa-lg"></i>: 123 456 789<br>
                          <i class="fa fa-fax fa-lg"></i>: +852 8765 4321<br>
                      <i class="fa fa-envelope fa-lg"></i>: <a href="mailto:indian@food.net">indian@food.net</a>
                   </address>
                    </div>
                    <div class="col col-sm-4 align-self-center">
                        <div style="text-align: center">
                                <a class="btn btn-social-icon btn-google-plus" href="http://google.com/+"><span class="fa fa-google-plus"></span></a>
                                <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><span class="fa fa-facebook"></span></a>
                                <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><span class="fa fa-linkedin"></span></a>
                                <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><span class="fa fa-twitter"></span></a>
                                <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><span class="fa fa-youtube"></span></a>
                                <a class="btn btn-social-icon" href="mailto:"><span class="fa fa-envelope-o"></span></a>
                          </div>
                    </div>
               </div>
               <div class="row justify-content-center">
                    <div class="col-auto ">
                        <p>© Copyright 2017 Indian Restaurant</p>
                    </div>
               </div>
            </div>
        </footer>
        <div id="ressign" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg" role="content">
                         <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Login</h4>
                                <button type="button" class="close"
                                   data-dismiss="modal"> &times; </button>
                            </div>
                            <form  class="form-inline" action="rlogin.php" method="post">
                            <div class="modal-body">
                            
          
                                        <div class="form-group">
                                            <label class="sr-only" for="exampleInputEmail3">Restaurant Id</label>
                                            <input type="number"name="reid" class="form-control form-control-sm mr-1" id="exampleInputEmail3" placeholder="Enter Restaurant Id">
                                        </div>
                                       
                              
                                </div>
                              
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary btn-sm">Sign in</button>
          
                                </div>
                              </form>
                        </div>
                    </div>
                </div>
</body>
</html>