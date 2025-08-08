<?php
// Eval injection test variation #579
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>