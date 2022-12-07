
<?php
    require_once("Components/layout.php");
    require_once("Components/header.php");
?>

<main>

    <h1>Edit reservations</h1>
   
    <a href="./index.php"><button type="button" class="actionCancel" id="button-cancel">Cancel</button></a>


        <div class="boxForm">
         <form action='?action=update&id=<?php echo $data["student"]->getId() ?>' method="post">
                <div class="inputGroup">
                    <span class="inputGroupText">Student / Team</span>
                    <input class="formControl" placeholder="Student's name" type="text" name="student" required value='<?php echo $data["student"]->getStudent() ?>'>
        </div>
                <div class="inputGroup">
                    <span class="inputGroupText">Message</span>
                    <input class="formControl" area-label="With textarea" type="text" name="message" required value='<?php echo $data["student"]->getMessage() ?>'>
                </div>
                <div class="buttonGroup">
                     <input type="submit" value="Edit" class="editStudent">
                     <input type="reset" value="Reset">
                </div>
               
        </form>
</div>
</main>


<?php 
    require_once("Components/footer.php");
?>


