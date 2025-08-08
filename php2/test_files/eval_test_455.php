<?php
// Eval injection test variation #455
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>