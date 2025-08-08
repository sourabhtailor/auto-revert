<?php
// Eval injection test variation #972
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>