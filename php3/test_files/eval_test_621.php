<?php
// Eval injection test variation #621
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>