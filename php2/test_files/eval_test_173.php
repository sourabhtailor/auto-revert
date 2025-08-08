<?php
// Eval injection test variation #173
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>