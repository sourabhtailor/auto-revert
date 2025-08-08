<?php
// Eval injection test variation #478
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>