<?php
// Eval injection test variation #590
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>