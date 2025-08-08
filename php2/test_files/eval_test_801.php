<?php
// Eval injection test variation #801
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>