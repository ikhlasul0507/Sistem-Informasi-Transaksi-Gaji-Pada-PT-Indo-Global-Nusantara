<!-- logout -->
<?php
session_start();
session_destroy();
?>
<script type="text/javascript">
	alert ("Anda Berhasil Keluar ");
	window.location.href="../";
</script>