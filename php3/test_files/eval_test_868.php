<?php
// Eval injection test variation #868
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>