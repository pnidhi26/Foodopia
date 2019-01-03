

<?php 
//Collect POST values 

$email = $_POST['emailid']; 
$password = $_POST['pass']; 
$name = $_POST['funame'];
//echo $email." ".$password." ".$name;
if($email && $password && $name){
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
   // echo "1";
    $query="SELECT email_id FROM customer WHERE email_id='$email'";
    if(mysql_fetch_assoc(mysql_query($query))){
        echo "<script type='text/javascript'>alert('you are already registered, Please Sign in');window.location.href='index.html'</script>";
    }
    else{
       // echo "2";
        $qry="INSERT INTO customer(email_id,name,password) VALUES('$email','$name','$password')"; 
         //Execute query 
        mysql_query($qry); 
        header('location: table.html');  
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
