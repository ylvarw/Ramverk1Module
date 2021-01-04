<?php

namespace Anax\View;

/**
 * render ip validation with json
 */
// Show incoming variables and view helper functions
//echo showEnvironment(get_defined_vars(), get_defined_functions());


?>
<h1>hitta en plats med IP</h1>
<br>


<form method="post">
    IP: <input type="text" name="ip" placeholder="<?= $ipAddress ?>" required>
    <input type="submit" name="doLocate" value="Hitta plats">
</form>
<!-- <form method="post">
    ip: <input type="text" name="ip">
    <input type="submit" name="doLocate" value="Hitta plats">
</form> -->

<p> <?= json_encode($json) ?> </p>



