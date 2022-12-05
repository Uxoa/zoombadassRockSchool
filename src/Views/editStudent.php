
   <?php
    require_once("Components/layout.php");
    require_once("Components/header.php");
?>
   
   <h1>Edit reservations</h1>
   
   <a href="./index.php"><button type="button" class="actionCancel" id="button-cancel">Cancel</button></a>
   
        <main>
        <div class="boxFormCreate">
     <form action='?action=update&id=<?php echo $data["student"]->getId() ?>' method="post">
            <div class="inputGroup">
                <span class="inputGroupText">Student / Team</span>
                <!--<input type="text" name="name" required value='<?php /*echo $data["student"]->getName()*/ ?>'>-->
                <input class="formControl" type="text" name="student" required value='<?php echo $data["student"]->getStudent() ?>'>
            </div>
            <div class="input-group">
                <span class="inputGroupText">Message</span>
                <input class="formControl" area-label="With textarea" type="text" name="message" required value='<?php echo $data["student"]->getMessage() ?>'>
            </div>
            <div class="botones" style="margin-bottom: 2rem;">
                <input type="submit" value="Edit" class="editStudent">
                <input type="reset" value="Reset">
            </div>
               
        </form>
</div>
    </main>


    <?php 
    require_once("Components/footer.php");
    ?>


