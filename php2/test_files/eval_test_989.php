<?php
// Eval injection test variation #989
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>