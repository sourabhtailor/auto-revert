<?php
// Eval injection test variation #178
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>