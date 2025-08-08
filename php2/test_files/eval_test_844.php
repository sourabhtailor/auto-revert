<?php
// Eval injection test variation #844
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>