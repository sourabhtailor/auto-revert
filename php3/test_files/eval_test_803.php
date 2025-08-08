<?php
// Eval injection test variation #803
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>