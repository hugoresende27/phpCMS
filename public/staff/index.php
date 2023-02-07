
<?php
//only use static strings on require //security
//../ needed here to load the SHARED_PATH
    require_once('../../private/initialize.php');

    $pageTitle = "Staff Menu";

    include(SHARED_PATH.'/staff_header.php')
?>


<div id="content">


        <div id="main-menu">
            <h2>Main Menu</h2>
            <ul>
                <li>
                    <a href="subjects/index.php">Subjects</a>
                </li>
            </ul>
        </div>

</div>


<?php

    include(SHARED_PATH.'/staff_footer.php')

?>
