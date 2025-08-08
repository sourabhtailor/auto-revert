<?php
// Eval injection test variation #259
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>