<?php
// Eval injection test variation #66
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>