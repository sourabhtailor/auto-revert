<?php
// Eval injection test variation #155
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>