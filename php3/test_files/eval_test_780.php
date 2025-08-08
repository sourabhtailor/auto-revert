<?php
// Eval injection test variation #780
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>