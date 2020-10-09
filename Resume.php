<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            echo $_POST['fname']. $_POST['mname']. $_POST['lname'];
            echo $_POST['gender'];
            echo $_POST['address'];
            echo $_POST['Hobby'];
            echo $_POST['email'];
            echo $_POST['contact'];
            $salutation="";
            if ($_POST['gender']=="male")
            {
                $salutation="Mr. ";
            }
            elseif ($_POST['gender']=="female") 
            {
                $salutation="Mrs/Ms. ";
            }
            
        ?>
        <table border="1">
            <thead>
                <tr>
                    <th colspan="2">Resume</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td><?php echo $salutation.$_POST['fname']." ". substr($_POST['mname'], 0,1).". ". $_POST['lname']; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td><?php echo $_POST['address'];?></td>
                </tr>
                <tr>
                    <td></td>
                    <td><?php echo $_POST['contact'];?></td>
                </tr>
                <tr>
                    <td></td>
                    <td><?php echo $_POST['email'];?></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p><span style="font-weight: bold;"> I,</span> </p>
                        <pre>   <?php echo $_POST['fname']." ".$_POST['mname']." ". $_POST['lname'];?> applying this job ..... i have experience of 5 years from previous job.
I whould like apply for this job
                        
                        </pre>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

    </body>
</html>


