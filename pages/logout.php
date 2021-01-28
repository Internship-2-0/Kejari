<?php

session_destroy();
echo "<script>alert('Logout Berhasil')</script>";
echo "<script>location='pages/login.php'</script> "; //me refresh

?>