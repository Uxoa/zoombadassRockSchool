
    
<?php
    require_once("Components/layout.php");
    require_once("Components/header.php");
?>

<main>
<h1>New student class reservation</h1>
<a href="./index.php"><button type="button" class="actionCancel" id="buttonCancel">Cancel</button></a>
    <div class="boxForm">
        <form  action='?action=store' method="post">
            <div class="inputGroup">
                <div class="rainbowText inputGroupText">
	                <span class="blockLine"><span><span style="color:#ff0000;">S</span><span style="color:#ff7700;">t</span><span style="color:#ffee00;">u</span><span style="color:#99ff00;">d</span><span style="color:#26ff00;">e</span><span style="color:#00ff51;">n</span><span style="color:#00ffc8;">t</span><span style="color:#00c3ff;">'</span><span style="color:#004cff;">s&nbsp;</span></span><span><span style="color:#2a00ff;">N</span><span style="color:#9d00ff;">a</span><span style="color:#ff00ea;">m</span><span style="color:#ff0073;">e</span></span></span>
                </div>
                <input class="formControl" type="text" name="student" required placeholder="write here Student's names">
            </div>

            <div class="inputGroup" >
                <div class="rainbowText inputGroupText">
                    <span class="blockLine"><span><span style="color:#ff0000;">M</span><span style="color:#ffdd00;">e</span><span style="color:#48ff00;">s</span><span style="color:#00ff95;">s</span><span style="color:#0091ff;">a</span><span style="color:#4d00ff;">g</span><span style="color:#ff00d9;">e</span></span></span>
                </div>
                <textarea class="formControl" area-label="With textarea" type="text" name="message" required placeholder="write here student's request"></textarea><i class="inputIcon"></i>

            </div>

            <div class="buttonGroup">
                <input type="submit" value="Create">
                <input type="reset" value="Reset">
            </div>
        </form>
    </div>
</main>


<?php require_once("Components/footer.php");?>    