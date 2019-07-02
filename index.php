<?php
header("Content-Type: plain/text");
?>
<?php if( $_ENV[ "HOSTNAME" ] ) { ?>PHP-<?php echo $_ENV["HOSTNAME"]; ?><?php } ?>