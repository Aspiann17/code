<?php
$db_path = __DIR__ . "/toko.sqlite";

try {
    $db = new PDO("sqlite:$db_path");
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch (Exception $e) {
    if ($e->getCode() === 14) {
        $file_info = stat($db_path);

        echo "<pre>";
        var_dump([
            "File Permission" => [
                "User" => posix_getpwuid($file_info['uid'])['name'],
                "Group" => posix_getgrgid($file_info['gid'])['name'],
                "Permission" => substr(sprintf('%o', $file_info['mode']), -4)    
            ],
            "Message" => $e->getMessage(),
        ]);
        echo "</pre>";

        exit;
    }

    die($e->getMessage());
}