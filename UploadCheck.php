<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uploadSuccess = true;
    $messages = [];

    // 驗證密碼
    if ($_POST['password'] !== 'FishFish') {
        die('密碼錯誤');
    }

    // 獲取並清理標題
    $title = $_POST['title'];

    // 獲取檔案副檔名
    $file_extension = pathinfo($_FILES["video-file"]["name"], PATHINFO_EXTENSION);
    $thumb_extension = pathinfo($_FILES["thumb-file"]["name"], PATHINFO_EXTENSION);

    // 處理影片上傳
    $target_dir = "UploadFiles/Video/";
    $target_file = $target_dir . $title . "." . $file_extension;
    if (move_uploaded_file($_FILES["video-file"]["tmp_name"], $target_file)) {
        $messages[] = "影片 '{$title}' 成功上傳。";
    } else {
        $messages[] = "抱歉，上傳影片 '{$title}' 時出錯。";
        $uploadSuccess = false;
    }

    // 處理縮圖上傳
    $target_dir = "UploadFiles/Thumb/";
    $target_file = $target_dir . $title . "." . $thumb_extension;
    if (move_uploaded_file($_FILES["thumb-file"]["tmp_name"], $target_file)) {
        $messages[] = "縮圖 '{$title}' 成功上傳。";
    } else {
        $messages[] = "抱歉，上傳縮圖 '{$title}' 時出錯。";
        $uploadSuccess = false;
    }

    // 儲存簡介
    $summary_dir = "UploadFiles/Summary/";
    $summary_file = $summary_dir . $title . ".txt";
    if (file_put_contents($summary_file, $_POST['summary']) !== false) {
        $messages[] = "簡介已儲存。";
    } else {
        $messages[] = "儲存簡介時出錯。";
        $uploadSuccess = false;
    }

    // 儲存詳細說明
    $detail_dir = "UploadFiles/Detail/";
    $detail_file = $detail_dir . $title . ".txt";
    if (file_put_contents($detail_file, $_POST['detail']) !== false) {
        $messages[] = "詳細說明已儲存。";
    } else {
        $messages[] = "儲存詳細說明時出錯。";
        $uploadSuccess = false;
    }

    // 輸出消息和重定向腳本
    echo "<html><head><title>上傳結果</title></head><body>";
    foreach ($messages as $message) {
        echo "<p>{$message}</p>";
    }
    
    if ($uploadSuccess) {
        echo "<p>3秒後自動返回首頁...</p>";
        echo "<script>
            setTimeout(function() {
                window.location.href = 'index.php';
            }, 3000);
        </script>";
    } else {
        echo "<p>上傳過程中發生錯誤，請<a href='javascript:history.back()'>返回</a>重試。</p>";
    }
    
    echo "</body></html>";
}
?>