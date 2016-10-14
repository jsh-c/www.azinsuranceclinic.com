<?PHP
     $totalinput = $_POST["totalinput"];
     $subject = $_POST["subject"];
     $headers = "MIME-Version: 1.0\r\n";
     $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
     $headers .= "Content-Transfer-Encoding: 7bit\r\n";
     $headers .= "From: info@arizonainsuranceclinic.com\r\n";
     $body = "<div style='font-size: 10pt; width: 500px; font-family: Verdana, Arial;'>"
     ."<span style='font-size: 12pt; font-weight: bold;'>"
     ."The following information was submitted through your website:<br><br>"
     .$subject."<br><br></span>";
     
     for ($i = 1; $i <= $totalinput; $i++) {
          $body .= "<b>" . $_POST["hidden".$i] . "</b>: " . $_POST["input".$i] . "<br><br>";
     }
     
     $body .= "</div>";
     $mailsend = mail("info@lowlowinsurancerates.com", $subject, $body, $headers);
     if ($mailsend) {
          echo "<span class='maintext1'>Your form has been submitted successfully, and a qualified agent will be getting back to you shortly.</span>";
     } else {
          echo "<span class='maintext1'>There was a problem submitting your form, please try again later.</span>";
     }
?>