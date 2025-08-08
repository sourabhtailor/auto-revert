<?php
// Eval injection test variation #553
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>