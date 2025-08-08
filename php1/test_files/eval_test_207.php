<?php
// Eval injection test variation #207
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>