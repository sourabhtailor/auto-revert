<?php
// Eval injection test variation #624
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>