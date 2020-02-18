   <?php
    //session_start();
    $path = './';
    require $path.'../../../dbConnect.inc';   
    if ($mysqli) {
  
           
$stmt = $mysqli->prepare("INSERT INTO survey(exp, ui, lesson, favlesson) VALUES(?,?,?,?)");
            $stmt->bind_param("iiis", $exp, $ui, $lesson, $favlesson);
                

            $exp = ($_POST['experiance']);
            $ui = ($_POST['ui']);
            $lesson =($_POST['lessons']);
            $favlesson =($_POST['favLesson']);
            $submit = $_POST['submitform'];
            
            $stmt->execute();
            $stmt->close();
    }
?>
   <!DOCTYPE html>
   <html lang="en">
   <?php
    $page = 'Survey Completed';
    require $path.'assets/inc/header.php';
?>

   <body>
       <h3 style="text-align: center;">Thank you for providing us with your feedback.</h3>
       <?php 
    $filename = 'groupsurvey.php';
	include $path.'assets/inc/footer.php';
    mysqli_close($mysqli);
?>
   </body>

   </html>
