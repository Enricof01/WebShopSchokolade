<?php
//Kommentar 
    //echo "Hallo WI";

    //var_dump($_GET);
    var_dump($_POST);

    //exit; (An der Stelle an der Exit steht wird der Code beendet!)

    $username="";
    $password="";
    $bLoginSuccess=false;

    if(isset($_POST ['username'])){
        $username = $_POST['username'];
    }
    if(isset($_POST ['password'])){
        $password = $_POST['password'];
    }
    if($username !== "" && $password!==""){
        //echo "geht";
        //echo $username;

        include 'dbsettings.php';

        $conn=new PDO("mysql:host=localhost;dbname=".$dbDatabasename,$dbLoginUsername,$dbPassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql="SELECT * FROM fpuser WHERE username= '".$username."' AND password= '".$password."'";

        foreach ($conn->query($sql) as $row) 
        {
            //PHP Session starten!
            session_start();

            $_SESSION['id']=$row['id'];
            $_SESSION['firstname']=$row['firstname'];
            $_SESSION['lastname']=$row['lastname'];
            $_SESSION['username']=$row['username'];
            $_SESSION['login']=111;
            $_SESSION['time']=time();
            $bLoginSuccess=true;
        }
        
        //Verbindung schließen
        $conn=null;
    }
        //Weiterleitung
        if($bLoginSuccess){
            header("Location: portalview.php");
        }else{
            header("Location: login.php");
        }
 
?>