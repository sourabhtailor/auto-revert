<?php
// Eval injection test variation #92
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>