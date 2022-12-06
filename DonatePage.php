<?php 

$month = date('m');
$day = date('d');
$year = date('Y');

$today = $year . '-' . $month . '-' . $day;
?>
<!DOCTYPE html>
<html>
<head>
    <title> TTIUP [Donate]</title>
    <link rel="stylesheet" href="donatetab.css">
</head>
<body>
    <nav class="menudesign">
        <div class="Title">TeamTreesInfoUpdate</div>
        <ul class="listdesign">
            <li><a href="HomePage.php">Home</a></li>
            <li><a href="History.php">History</a></li>
            <li><a href="AboutUs.php">About Us</a></li>
            <li class="activated"><a href="DonatePage.php">Donate</a></li>
        </ul>
    </nav>
    <div class="form">
    <h1>Donation Form</h1>
        <form method="POST" action="database.php">
        <h5 class="personinfo">Personal Information</h5>
        <div class="fname">
        <input type="text" name= "FirstName" required>
        <span></span>
        <label>First Name <span style="font-size: 16px; font-style: italic;">(Ex: Juan Justin)</span></label>
        </div>
        <div class="mname">
            <input type="text" name="MiddleName" required>
            <span></span>
            <label>Middle Name <span style="font-size: 16px; font-style: italic;">(Ex: Hernandez)</span></label>
        </div>
        <div class="lname">
            <input type="text" name="LastName" required>
            <span></span>
            <label>Last Name <span style="font-size: 16px; font-style: italic;">(Ex: Dela Cruz)</span></label>
        </div>
        <div class="age">
            <input type="number" name="Age" min="1" max="100" required>
            <span></span>
            <label>Age</label>
        </div>
        <div class="country">
            <input type="text" name="Country" required>
            <span></span>
            <label>Country <span style="font-size: 16px; font-style: italic;">(Ex: Philippines)</span></label>
        </div>
        <h5 class="detail">Contact & Donation Details</h5>
        <div class="email">
            <input type="email" name="Email" required>
            <span></span>
            <label>Email Address <span style="font-size: 16px; font-style: italic;">(Ex: UserAccount@gmail.com)</span></label>
        </div>
        <div class="hmdonate">
            <input type="number" name="Donate" min="1" required>
            <span></span>
            <label>How much do you want to donate?<span style="font-size: 16px; font-style: italic;">(Peso)</span></label>
        </div>
        <div class="location">
            <input type="text" name="Location" required>
            <span></span>
            <label>Recommend a Location <span style="font-size: 16px; font-style: italic;">(Ex: USA, Ohio)</span></label>
        </div>
        <h5 class="comment">Comment</h5>
        <textarea placeholder="Encourage others to contribute to our movement or provide feedback about the organization..." name="Comment"></textarea>
        <input type="submit" name="submit" value="Submit">
        <div class="date">
        <input type="date" value="<?php echo $today; ?>" min="<?php echo $today; ?>" max="<?php echo $today; ?>" name="Date"  required>
        </div>
        </form>
    </div>
    </body>
</html>