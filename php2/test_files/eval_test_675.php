<?php
// Eval injection test variation #675
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>