<?php
// Eval injection test variation #705
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>