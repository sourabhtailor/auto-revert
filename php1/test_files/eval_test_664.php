<?php
// Eval injection test variation #664
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>