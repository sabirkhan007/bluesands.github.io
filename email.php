<!DOCTYPE html>
<?php 
if(isset($_POST['submit']))
    {
        $name = $_POST['name']; // Get Name value from HTML Form
        $phone = $_POST['phone']; // Get Mobile No
  		$email = $_POST['email']; // Get Email Value
        //$msg = $_POST['message']; // Get Message Value
         
        $to = "info@bluesands.in"; // You can change here your Email
        $subject = "'$name' has been sent a mail"; // This is your subject
         
        // HTML Message Starts here
        $message ="
        <html>
            <body>
                <table style='width:600px;'>
                    <tbody>
                        <tr>
                            <td style='width:150px'><strong>Title- </strong></td>
                            <td style='width:400px'>Enquiry from BlueSands</td>
                        </tr>

                        <tr>
                            <td style='width:150px'><strong>Name: </strong></td>
                            <td style='width:400px'>$name</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Email ID: </strong></td>
                            <td style='width:400px'>$email</td>
                        </tr>
                        
                        <tr>
                            <td style='width:150px'><strong>Mobile No: </strong></td>
                            <td style='width:400px'>$phone</td>
                        </tr>
                    </tbody>
                </table>
            </body>
        </html>
        ";
        // HTML Message Ends here
         
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
        // More headers
        $headers .= 'From: Admin <info@bluesands.in>' . "\r\n"; // Give an email id on which you want get a reply. User will get a mail from this email id
        $headers .= 'Cc: bluesands1297@gmail.com' . "\r\n"; // If you want add cc
        
         
        if(mail($to,$subject,$message,$headers)){
            // Message if mail has been sent
            echo "<script>
                    alert('Mail has been sent Successfully.');
                    window.location.href = 'https://bluesands.in/';
                </script>";
               
        }
 
        else{
            // Message if mail has been not sent
            echo "<script>
                    alert('EMAIL FAILED');
                </script>";
        }
    }
?>