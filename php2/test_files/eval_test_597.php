<?php
// Eval injection test variation #597
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>