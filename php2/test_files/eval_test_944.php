<?php
// Eval injection test variation #944
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>