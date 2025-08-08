<?php
// Eval injection test variation #358
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>