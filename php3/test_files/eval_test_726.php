<?php
// Eval injection test variation #726
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>