<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form class="form" action="submission.php" method="post">
        <fieldset>
            <legend class="legend">Registration Form</legend>
            <div class="labels">
                    <div class="fname">
                        <label value="fname" >Name</label>
                        <input name="fname" type="text" placeholder="your name">
                    </div>
                    <div class="mname">
                        <label value="mname" >Middle name</label>
                        <input name="mname" type="text" placeholder="your middle name">
                    </div>
                    <div class="lname">
                        <label value="lname" >Lastname</label>    
                        <input name="lname" type="text" name="" id="" placeholder="your title">
                    </div>
                    <div class="email">
                        <label value="email">Email</label>
                        <input name="email" type="email" name="" id=""placeholder="email here">
                    </div>
                    <div class="pass">
                        <label value="pass" for="pass">Password</label>
                        <input name="pass" type="password" placeholder="your password">
                    </div>
                    <div class="rpass">
                        <label value="rpass" for="rpass">Repeat Password</label>
                        <input name="rpass" type="password" placeholder="repeat your password">
                    </div>
                    <div class="btn">
                        <input type="reset" value="Reset" class="resetbtn">
                        <input type="submit" value="Submit" class="submitbtn" >
                    </div>
                    
                </div>
        </fieldset>
    </form>
</body>
</html>