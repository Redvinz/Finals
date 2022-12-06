<?php
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
        $conn=mysqli_connect('localhost', 'root', '', 'ttiup') or die("Connection Failed:".mysqli_connect_error());
        if(isset($_POST['FirstName']) && isset($_POST['MiddleName']) && isset($_POST['LastName']) && isset($_POST['Age']) && isset($_POST['Country']) && isset($_POST['Email']) && isset($_POST['Donate']) && isset($_POST['Location']) && isset($_POST['Comment']) && isset($_POST['Date'])){
            $fname=$_POST['FirstName'];
            $mname=$_POST['MiddleName'];
            $lname=$_POST['LastName'];
            $age=$_POST['Age'];
            $country=$_POST['Country'];
            $email=$_POST['Email'];
            $donate=$_POST['Donate'];
            $location=$_POST['Location'];
            $comment=$_POST['Comment'];
            $date=$_POST['Date'];

            $sql1= "INSERT INTO `usertable` ( `FName`, `MName`, `LName`, `Age` ) VALUES ( '$fname' , '$mname' , '$lname' , '$age' )";
            $result = $conn->query($sql1);
        
            if($result){
                $user_id = $conn->insert_id;
                $sql2= "INSERT INTO `countrytable` (`UserID`, `Country`) VALUES ('$user_id' , '$country' )";
                $result2 = $conn->query($sql2);
                $sql3= "INSERT INTO `emailtable` (`UserID`, `EmailAddress`) VALUES ('$user_id' , '$email' )";
                $result3 = $conn->query($sql3);
                $sql4= "INSERT INTO `donationtable` (`UserID`, `Donation`, `Date`) VALUES ('$user_id' , '$donate' , '$date' )";
                $result4 = $conn->query($sql4);
                $donation_id = $conn->insert_id;
                $sql5= "INSERT INTO `main` (`DonationID`, `RecommendedLocation`, `Comment`) VALUES ('$donation_id' , '$location' , '$comment' )";
                $result5 = $conn->query($sql5);
                echo "<script>
            alert('Data Saved!');
            window.location.href='DonatePage.php';
            </script>"; 
            }
            else{
                echo "<script>
            alert('Error Occured');
            window.location.href='DonatePage.php';
            </script>"; 
            }
        }
        }
    
?>  
<!DOCTYPE html>
<html>
<head>
<title> TTIUP [Donate]</title>
    <link rel="stylesheet" href="donatetab.css">
</head>
<body>
</body>
</html>