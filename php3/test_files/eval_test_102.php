<?php
// Eval injection test variation #102
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>