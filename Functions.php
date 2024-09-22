<?php
function getVideoFiles() {
    $directory = 'UploadFiles/Video/'; // 資料夾名稱
    $videoFiles = [];
    $allowedExtensions = ['mp4', 'avi', 'mov', 'wmv', 'webm', 'ogg']; // 允許的影片副檔名

    if (is_dir($directory)) {
        $files = scandir($directory);
        foreach ($files as $file) {
            $extension = pathinfo($file, PATHINFO_EXTENSION);
            if (in_array(strtolower($extension), $allowedExtensions)) {
                $filenameWithoutExtension = pathinfo($file, PATHINFO_FILENAME);
                $videoFiles[] = $filenameWithoutExtension;
            }
        }
    }
    return $videoFiles;
}

function findVideoFile($baseName) {
    $allowedExtensions = ['mp4', 'avi', 'mov', 'wmv', 'webm', 'ogg']; 
    foreach ($allowedExtensions as $ext) {
        $filePath = 'UploadFiles/Video/' . $baseName . '.' . $ext;
        if (file_exists($filePath)) {
            return $filePath;
        }
    }
    return null; 
}

function findThumbFile($baseName) {
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp']; // 允許的圖片格式
    foreach ($allowedExtensions as $ext) {
        $filePath = 'UploadFiles/Thumb/' . $baseName . '.' . $ext;
        if (file_exists($filePath)) {
            return $filePath;
        }
    }
    return null; 
}

function getVideoDetails($videoFile) {
    $baseName = pathinfo($videoFile, PATHINFO_FILENAME);
    $detailFile = 'UploadFiles/Detail/' . $baseName . '.txt';
    
    $details = [];
    if (file_exists($detailFile)) {
        $lines = file($detailFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            $details[] = $line;
        }
    }
    return $details;
}
function getVideoSummarys($videoFile) {
    $baseName = pathinfo($videoFile, PATHINFO_FILENAME);
    $detailFile = 'UploadFiles/Detail/' . $baseName . '.txt';
    
    $details = [];
    if (file_exists($detailFile)) {
        $lines = file($detailFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            $details[] = $line;
        }
    }
    return $details;
}
?>