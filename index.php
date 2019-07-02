<?php
header("Content-Type: text/plain");
?>
<?php if( $_ENV[ "HOSTNAME" ] ) { ?>PHP-<?php echo $_ENV["HOSTNAME"]; ?><?php } ?>