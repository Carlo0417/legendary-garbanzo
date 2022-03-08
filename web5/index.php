<?php
	session_start();	

	if(isset($_SESSION['views']))
	{
   	 	$_SESSION['views'] = $_SESSION['views']+1;
	}
	
	else
	{
    	$_SESSION['views']=1;
	}
     
	$num_visits = $_SESSION['views'];

?>

<h1>Hello</h1>
<p>You have visited this page <?= $num_visits ?> times</p>
<p><a href="?reset=true">Reset</a></p>

<?php  

	if($num_visits == 5)
   	{
   		echo "<p> <b>Thank you</b> for visiting the page a lot.</p>";
   	}

   	elseif ($num_visits == 10) 
   	{
   		 header('Location: congratulations.php');
   	}
?>