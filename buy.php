<?php

/*print_r($_GET);

$qty = $_GET['qty'];
$pids = $_GET['pid'];

print_r($qty);
print_r($pids);*/

//want to access prices from db at this point so that user
//can't dictate prices through query string.

//process some of the order here

$form = <<<END_OF_FORM

    <form method=post action="purchase.php?">
        Name: <input type="text" name="name" /><br/>
        Address: <input type="address" name="address"/><br/>
        <input type="submit" name="submit" value="Submit Order" />
    </form>
END_OF_FORM;

echo json_encode($form);
