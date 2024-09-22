<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 獲取表單資料
    $firstName = htmlspecialchars($_POST['first-name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $comment = htmlspecialchars($_POST['comment']);

    // 獲取當前日期和時間，格式為 YYYY-MM-DD_HHMM
    $dateTime = date('Y-m-d_His'); // 'Y-m-d_His' 表示年-月-日_時分秒

    // 設置動態檔案名稱，包含日期、時間和使用者的名字
    $filePath = 'UploadFiles/ContactUs/' . $dateTime . '_' . $firstName . '.txt';

    // 準備要寫入的內容
    $data = "聯絡人: $firstName\n----------\nEmail: $email\n----------\nSubject: $subject\n----------\nComment: $comment\n\n";
	// 將內容寫入檔案
	if (file_put_contents($filePath, $data)) {
		// 成功訊息 + 3 秒自動跳轉
		echo "<p>您的訊息我們已經收到!</p>";
		echo "<p>將在3秒後自動為您回到首頁...</p>";
		echo "<script>
				setTimeout(function() {
					window.location.href = 'index.php'; // 跳轉到感謝頁面，或你想跳轉的 URL
				}, 3000); // 3000 毫秒 = 3 秒
			</script>";
	} else {
		// 失敗訊息
		echo "<p>您的訊息我們沒有收到(發生異常)!</p>";
		echo "<p>將在3秒後自動為您回到首頁...</p>";
		echo "<script>
				setTimeout(function() {
					window.location.href = 'index.php'; // 跳轉到感謝頁面，或你想跳轉的 URL
				}, 3000); // 3000 毫秒 = 3 秒
			</script>";
	}
}
?>
