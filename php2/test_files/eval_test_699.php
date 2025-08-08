<?php
// Eval injection test variation #699
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>