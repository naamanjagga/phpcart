
 <?php 
    //  $_SESSION["name"] = $_POST["name"];
    //  $_SESSION["email"] = $_POST["email"];
    //  $_SESSION["message"] = $_POST["message"];

    //  echo '<br>';
    //  echo $_SESSION["name"];
    //  echo '<br>';
    //  echo $_SESSION["email"];
    //  echo '<br>';
    //  echo $_SESSION["message"]; 
    
     if(isset($_POST["submit0"])){
        $a = '<img style="width: 20px; height: 20px;" src="images/football.png">';
		$b = 'Product 101';
		$c = 'Price: $150.00';
        $_SESSION["addtocart"] .= '<tr><td>'.$a.'</td><td>'.$b.'</td><td>'.$c.'</td></tr>';
    }
    if(isset($_POST["submit1"])){
        $a = '<img style="width: 20px; height: 20px; src="images/tennis.png">';
		$b = 'Product 102';
		$c = 'Price: $120.00';
        $_SESSION["addtocart"] .= '<tr><td>'.$a.'</td><td>'.$b.'</td><td>'.$c.'</td></tr>';
    }
    if(isset($_POST["submit2"])){
        $a = '<img style="width: 20px; height: 20px; src="images/basketball.png">';
		$b = 'Product 103';
		$c = 'Price: $90.00';
        $_SESSION["addtocart"] .= '<tr><td>'.$a.'</td><td>'.$b.'</td><td>'.$c.'</td></tr>';
    }
    if(isset($_POST["submit3"])){
        $a = '<img style="width: 20px; height: 20px; src="images/table-tennis.png">';
		$b = 'Product 104';
		$c = 'Price: $110.00';
        $_SESSION["addtocart"] .= '<tr><td>'.$a.'</td><td>'.$b.'</td><td>'.$c.'</td></tr>';
    }
    if(isset($_POST["submit4"])){
        $a = '<img style="width: 20px; height: 20px; src="images/soccer.png">';
		$b = 'Product 105';
		$c = 'Price: $80.00';
        $_SESSION["addtocart"] .= '<tr><td>'.$a.'</td><td>'.$b.'</td><td>'.$c.'</td></tr>';
    }
    echo '<table>';
      print_r($_SESSION["addtocart"]);
    echo '</table>';
?>