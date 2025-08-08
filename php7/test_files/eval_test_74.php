<?php
// Eval injection test variation #74
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>