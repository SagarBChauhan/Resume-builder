<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .error{
                color: red;
            }
        </style>
    </head>
    <body>
        <?php $hobby= array("Singing","Dancing","Reading","Travelling"); ?>
        <form action="Resume.php" method="post" >
            Name: <input type="text" name="fname" value="" required/> <input type="text" name="mname" value="" required/> <input type="text" name="lname" value="" required/><span class="error">*</span><br><br>
            <!--pattern="/^[a-zA-Z ]*$/"--> 
            Gender: <input type="radio" name="gender" value="female">Female
                    <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="other">Other
                    <span class="error">*</span>
                    <br><br>
            Address:<textarea name="address" rows="5" cols="40"required></textarea><span class="error">*</span><br><br>
            Date Of Birth:<input type="date" name="DOB" max="2000-01-01" required/> <span class="error">*</span><br><br>
            Hobby:<?php for ($i=0;$i<count($hobby);$i++){
                    echo "<input type='checkbox' name='Hobby' value='".$hobby[$i]."' />".$hobby[$i];
            }
            
            ?>           
            <br><br>
            Email:<input type="text" name="email" max="2000-01-01" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required/> <span class="error">*</span><br><br>
            Contact:<input type="number" name="contact" maxlength="10" required/> <span class="error">*</span><br><br>
            <input type="submit" value="Submit" />
            <input type="reset" value="Reset" />
        </form>
    </body>
</html>
