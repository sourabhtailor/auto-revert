<?php
// Eval injection test variation #860
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>