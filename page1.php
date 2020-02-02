<?php // Adding the header
require 'inc/header.inc.php'; ?>

<div id="paramset">
    <h1>Please set the following paramaters!</h1>
        <ul>
            <li><a href="page2.php?errors=display">errors</a> Options are: display, hide</li>
            <li><a href="page2.php?font=serif">font</a> Options are: serif, sans</li>
            <li><a href="page2.php?bag=paper">bag</a> Options are: paper, plastic</li>
            <li><a href="page2.php?howmany=2">howmany</a> Options are: 0-5</li>
            <li><a href="page2.php?transport=bike&howmany=1">transport</a> Options are: car, bike, bus</li>
            <li><a href="page2.php?computer=pc">computer</a> Options are: mac, pc, linux</li>
            <li><a href="page2.php?vacation=beach">vacation</a> Options are: beach, vegas, overseas, lakehouse</li>
        </ul>
    
</div>


<?php // Adding the footer
require 'inc/footer.inc.php'; ?>