<?php
// Eval injection test variation #716
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>