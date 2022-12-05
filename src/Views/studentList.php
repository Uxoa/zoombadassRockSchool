
<?php
    require_once("Components/layout.php");
    require_once("Components/header.php");
?>



<h1>Students class reservations</h1>

<main>

<div class="titleAndActionCreate">
    <a href="?action=create" class="actionCreate" onclick="executeExample('multipleInputs')">Add reservation</a> 

    <div id="bars">
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
</div>
</div>
<main>   

<div>
  <table class="tableResults">
    <thead>
      <tr>
        <th class="col" scope="col">id</th>
        <th class="col" scope="col">Student</th>
        <th class="col" scope="col">Message</th>
        <th class="col" scope="col">Datatime</th>
      </tr>
    </thead>
    <tbody>
      <tr>


      <?php
                foreach ($data["student"] as $student) {
                  /* <a href='?action=edit&id={$student->getId()}'> edit </a> */
                    echo "
                    <tr class='resultsTr'>    
                            <td>{$student->getId()}</td>
                            <td>{$student->getStudent()}</td>
                            <td>{$student->getMessage()}</td>
                            <td class='dateSmall'>{$student->getDateTime()}</td>
                            <td class='actionButtons'>
                            
                            <a href='?action=delete&id={$student->getId()}' class='actionDelete'> delete </a>
                            <a href='?action=edit&id={$student->getId()}' class='actionEdit'> edit </a>
                            </td>
                        </tr>
                        ";
                    }?>

      </tr>

    </tbody>

  </table>

</div>







</div>
        



<!-- Music decoration -->




            
        </main>


    <?php require_once("Components/footer.php");?>    
