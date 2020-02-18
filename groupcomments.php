<?php
    session_start();
    $path = './';
    require $path.'../../../dbConnect.inc';   
    if ($mysqli) {
        if (isset($_POST['username']) && isset($_POST['comment'])) {
            if( $_POST['username']!='' && $_POST['comment']!='' ){

                function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }   
           
$stmt = $mysqli->prepare("INSERT INTO group_comments(username, comment, exp, ui, lesson, favlesson) VALUES(?,?,?,?,?,?)");
            $stmt->bind_param("ssiiis", $fullname, $comment, $exp, $ui, $lesson, $favlesson);
                

            $fullname = test_input($_POST['username']);
            $comment = test_input($_POST['comment']);
            $exp = ($_POST['experiance']);
            $ui = ($_POST['ui']);
            $lesson =($_POST['lessons']);
            $favlesson =($_POST['favLesson']);
            $submit = $_POST['submitform'];
            
            $stmt->execute();
            $stmt->close();
            }//end of if to make sure data is sent using $_POST
        }//end of isset

    }
?>
<!DOCTYPE html>
<html lang="en">
<style>
    td {
        padding: 1em;
    }

    table {
        margin-bottom: 1em;
        background-color: white;
    }

</style>
<script>
    function checkIfRadioButtonSelected() {
        "use strict";
        var isChecked = false;
        var len = document.getElementsByName('favLesson').length;
        var choices = new Array();
        for (var i = 0; i < len; i++) {
            if (document.getElementsByName('favLesson')[i].checked) {
                choices.push(document.getElementsByName('favLesson')[i].value);
            }
        } //end of for loop

        if (choices.length > 0) {
            isChecked = true;
            document.getElementsByTagName('fieldset')[0].style = null;
            document.getElementsByTagName('legend')[0].style = null;
        } else {
            document.getElementsByTagName('fieldset')[0].style.borderColor = 'red';
            document.getElementsByTagName('legend')[0].style.color = 'red';
        }

        return isChecked;

    } //end of function checkIfRadioButtonSelected
</script>
<?php
    $page = 'Comments';
    require $path.'assets/inc/header.php';
?>

<body>


        Name: <input type="text" id="username" name="username" width="40" placeholder="<?php if(isset($_SESSION['username'])){echo $_SESSION['username'];} else{echo "Enter name";}  ?>" value="<?php if(isset($_SESSION['username'])){echo $_SESSION['username'];}?>" required />
        <p>&nbsp;</p>
        Comment: <br /> <textarea id="comment" name="comment" cols="90" rows="10" placeholder="Enter your comment" style="width: 50%;" required></textarea>
        <p><input type="submit" name="submitform" action="index.php" onclick="return form" value="Submit"></p>

    </form>
    <div id="comment_table">
        <?php
                //get contents of table and send back
        $sql = 'select username, comment from group_comments';
        $res=$mysqli->query($sql);
        if($res->num_rows > 0){
            echo "<table><tr><th>Name</th><th>Comment</th></tr>";
            while($row = $res->fetch_assoc()){
                echo "<tr><td>".$row["username"] . ":</td><td>".$row["comment"] . "</td></tr>"; 
            }
            echo "</table>";
        }
    ?>
    </div>
    <?php 
    $filename = 'groupcomments.php';
	include $path.'assets/inc/footer.php';
    mysqli_close($mysqli);
?>
</body>

</html>
