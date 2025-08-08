<?php
// Eval injection test variation #280
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>