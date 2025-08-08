<?php
// Eval injection test variation #990
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>