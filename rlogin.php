    
<?php 
//Collect POST values 

$rsid = $_POST['reid']; 
if($rsid ){
//Connect to mysql server 
$link = mysql_connect('localhost', 'root', ''); 
//Check link to the mysql server 
if(!$link) { 
die('Failed to connect to server: ' . mysql_error()); 
} 
//Select database 
$db = mysql_select_db('restaurent'); 
if(!$db) { 
die("Unable to select database"); 
} 
else{
    $query="SELECT rid FROM restaurant WHERE rid='$rsid'";
    if(mysql_fetch_assoc(mysql_query($query))){
        header('location:employee.php'); 
    }
    else{
       
        echo "<script type='text/javascript'>alert('you are not registered, Please Sign up first');window.location.href='index.html'</script>";
        
   }
//Create query (if you have a Logins table the you can select login id and password from there)

//Check whether the query was successful or not 
}
}
else{
    echo 'You did not fill all the field';
    header('location:index.html');  
}

?>
