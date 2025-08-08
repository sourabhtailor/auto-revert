<?php
// Eval injection test variation #919
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>