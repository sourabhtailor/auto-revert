<?php
// Eval injection test variation #569
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>