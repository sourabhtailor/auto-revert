<?php
// Eval injection test variation #526
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>