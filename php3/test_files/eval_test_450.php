<?php
// Eval injection test variation #450
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>