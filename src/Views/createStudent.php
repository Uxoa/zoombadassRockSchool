
    
<?php
    require_once("Components/layout.php");
    require_once("Components/header.php");
?>

    
    <h1>New student class reservation</h1>
    <a href="./index.php"><button type="button" id="button-cancel">Cancel</button></a>

    <main>

    <div class="boxFormCreate">

  
        <form  action='?action=store' method="post">
            <div class="input-group">
                <span class="input-group-text">Student / Team</span>
                <input class="form-control" type="text" name="student" required placeholder="write here Student's names">
            </div>
            <div class="input-group" >
                <span class="input-group-text">Message</span>
                <textarea class="form-control" area-label="With textarea" type="text" name="message" required placeholder="write here student's request"></textarea>
            </div>
            <div class="botones">
                <input type="submit" value="Create">
                <input type="reset" value="Reset">
            </div>
        </form>
</div>
        </main>


<?php require_once("Components/footer.php");?>    