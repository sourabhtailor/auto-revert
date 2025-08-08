<?php
// Eval injection test variation #333
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>