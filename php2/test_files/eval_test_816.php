<?php
// Eval injection test variation #816
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>