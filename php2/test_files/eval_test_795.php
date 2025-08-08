<?php
// Eval injection test variation #795
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>