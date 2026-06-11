<?php

session_destroy();

echo '
<script>
    window.location = "/carwash/";
</script>
';
/*
session_destroy();

header("Location: ../");
exit();*/
?>