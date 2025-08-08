<?php
// Eval injection test variation #211
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>