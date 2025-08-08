<?php
// Eval injection test variation #508
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>