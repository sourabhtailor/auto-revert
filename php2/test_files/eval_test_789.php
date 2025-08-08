<?php
// Eval injection test variation #789
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>