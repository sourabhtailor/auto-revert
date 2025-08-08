<?php
// Eval injection test variation #729
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>