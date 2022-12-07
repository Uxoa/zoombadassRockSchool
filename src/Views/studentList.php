
<?php
    require_once("Components/layout.php");
    require_once("Components/header.php");
?>




<main>
<h1>Students class reservations</h1>

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
                            
                               <div class='boxActionDelete' onclick='executeExample('multipleInputs')'>
                                  <a href='?action=delete&id={$student->getId()}' class='actionDelete'> delete </a><img class='iconDel' src='./public/images/deleteStudentIcon01.png' alt='Delete Student Icon'/>
                               </div>
                               <div class='boxActionEdit'>
                                  <a href='?action=edit&id={$student->getId()}' class='actionEdit'> edit </a><img class='iconDel' src='./public/images/editStudentIcon01.png' alt='Edit Student Icon'/>
                               </div>
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
