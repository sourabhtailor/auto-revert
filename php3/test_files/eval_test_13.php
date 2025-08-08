<?php
// Eval injection test variation #13
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>