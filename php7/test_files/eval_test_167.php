<?php
// Eval injection test variation #167
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>