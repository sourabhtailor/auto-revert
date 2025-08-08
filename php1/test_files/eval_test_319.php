<?php
// Eval injection test variation #319
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>