/* Procedural style */
<?php
 
$conn = mysqli_connect("104.251.214.174", "isparktv", "Isparktv!2021", "subscription");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

/* check if server is alive */
if (mysqli_ping($conn)) {
    printf ("Our connection is ok!\n");
} else {
    printf ("Error: %s\n", mysqli_error($conn));
}

$ext = new ReflectionExtension('mysqli');
var_dump($ext->getVersion());
/* close connection */
mysqli_close($conn);
?>
