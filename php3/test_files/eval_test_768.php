<?php
// Eval injection test variation #768
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>