<?php
// Eval injection test variation #140
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>