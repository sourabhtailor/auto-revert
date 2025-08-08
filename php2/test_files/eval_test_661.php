<?php
// Eval injection test variation #661
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>