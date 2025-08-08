<?php
// Eval injection test variation #9
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>