<?php
    //logout
    session_start();
    session_destroy();
    $_SESSION['status'] = 'belumlogin';
    // arahkan ke halaman login.php 
     echo"<script>
	alert('Logout Berhasil');
	window.location='indexlogin.php';</script>";
?>