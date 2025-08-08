<?php
// Eval injection test variation #542
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>