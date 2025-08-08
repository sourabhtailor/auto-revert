<?php
// Eval injection test variation #375
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>