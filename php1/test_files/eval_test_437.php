<?php
// Eval injection test variation #437
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>