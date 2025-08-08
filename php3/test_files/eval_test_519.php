<?php
// Eval injection test variation #519
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>