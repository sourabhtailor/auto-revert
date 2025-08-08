<?php
// Eval injection test variation #585
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>