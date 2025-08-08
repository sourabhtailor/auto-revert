<?php
// Eval injection test variation #181
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>