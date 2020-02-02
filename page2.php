<?php // Adding the header
require 'inc/header.inc.php'; ?>

<div>
    <?php 
    $errors = "";
    $error_count = 0;
    $showerrors = FALSE;

        if ($_SERVER['REQUEST_METHOD'] == "GET") {

            // Check Errors
            if (isset($_GET['errors'])) {
                if (strtolower($_GET['errors']) == 'hide') {
                }
                if (strtolower($_GET['errors']) == 'display') {
                    $errors .= "<strong>Here are your errors:</strong><br><ol>";
                    $showerrors = TRUE;
            } 
            } else {
                $errors .= "<li>Please set <strong>errors</strong> to display or hide</li>";
                ++$error_count;
            }

            // Check Background
            if (isset($_GET['font'])) { // set variable to light or dark
                if (strtolower($_GET['font']) == "serif") {
                    $background = "serif"; 
                }
                if (strtolower($_GET['font']) == "sans") {
                    $background = "sans";
                }
            } else {
                $errors .= "<li>Please set <strong>font</strong> to serif or sans</li>";
                ++$error_count;
            }

            // Check Bag
            if (isset($_GET['bag'])) {
                if (strtolower($_GET['bag'])== 'paper') {
                    $bag = "<img src=\"img/paperbag.jpg\" alt=\"Paper bag\">";
                }
                if (strtolower($_GET['bag'])== 'plastic') {
                    $bag = "<img src=\"img/plasticbag.jpg\" alt=\"Plastic bag\">";
                }
            } else {
                $errors .= "<li>Please set <strong>bag</strong> to paper or plastic</li>";
                ++$error_count;
            }

            // Check How Many
            if (isset($_GET['howmany'])) {
                $howmany = $_GET['howmany'];
            } else {
                $errors .= "<li>Please set a number from 0 to 5 for <strong>howmany</strong></li>";
                ++$error_count;
            }

            // Check Transport
            if (isset($_GET['transport'])) {
                if (strtolower($_GET['transport'])== 'car') {
                    $transport = "I drive $howmany car(s)!<br>";
                }
                if (strtolower($_GET['transport'])== 'bike') {
                    $transport = "I have $howmany bike(s)!<br>";
                }
                if (strtolower($_GET['transport'])== 'bus') {
                    $transport = "I ride the bus $howmany times a week!<br>";
                }
            } else {
                $errors .= "<li>Please set <strong>transport</strong> to car, bike, or bus</li>";
                ++$error_count;
            }

            // Check Computer
            if (isset($_GET['computer'])) {
                if (strtolower($_GET['computer']) == 'mac'){
                    $computer = "I despise Mac and would rather use my PC or Linux machines... GOTCHA";
                }
                if (strtolower($_GET['computer']) == 'pc'){
                    $computer = "I despise PC and would rather use my Mac or Linux machines... GOTCHA";
                }
                if (strtolower($_GET['computer']) == 'linux'){
                    $computer = "I despise Linux and would rather use my Mac or PC machines... GOTCHA";
                }
            } else {
                $errors .= "<li>Please set <strong>computer</strong> to mac, pc, or linux</li>";
                ++$error_count;
            }

            // Check Vacation
            if (isset($_GET['vacation'])) {
                if (strtolower($_GET['vacation'])== 'beach') {
                    $vacation = "<img src=\"img/thebeach.jpg\" alt=\"The Beach\">";
                }
                if (strtolower($_GET['vacation'])== 'vegas') {
                    $vacation = "<img src=\"img/vegas.jpg\" alt=\"Las Vegas\">";
                }
                if (strtolower($_GET['vacation'])== 'overseas') {
                    $vacation = "<img src=\"img/overseas.jpg\" alt=\"A plane\">";
                }
                if (strtolower($_GET['vacation'])== 'lakehouse') {
                    $vacation = "<img src=\"img/lakehouse.jpg\" alt=\"A nice Lakehouse\">";
                }
            } else {
                $errors .= "<li>Please set <strong>vacation</strong> to beach, vegas, overseas, or lakehouse</li>";
                ++$error_count;
            }
            $errors .= "</ol>";
        }   
    ?>
</div>

<div class="<?php echo $background; ?>"> 
        <h1>Welcome to Page 2</h1>
    <?php // Showing errors if set to display
        if ($showerrors) {
            echo "<p>$errors</p>";
        }
        if (isset($_GET['bag'])) {
            echo "<p>$bag</p>";
        }
        if (isset($_GET['transport'])) {
            echo "<p>$transport</p>";
        }   
        if (isset($_GET['computer'])) {
            echo "<p>$computer</p>";
        }
        if (isset($_GET['vacation'])) {
            echo "<p>$vacation</p>";
        }
    ?>
</div>

<?php // Adding the footer
require 'inc/footer.inc.php'; ?>