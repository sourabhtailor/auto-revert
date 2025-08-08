<?php
// Eval injection test variation #429
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>