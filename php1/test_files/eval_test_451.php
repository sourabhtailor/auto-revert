<?php
// Eval injection test variation #451
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>