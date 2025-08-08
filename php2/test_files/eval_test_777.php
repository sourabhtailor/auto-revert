<?php
// Eval injection test variation #777
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>