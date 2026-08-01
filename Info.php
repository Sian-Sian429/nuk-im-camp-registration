<?php
    // 1. 安全接收變數
    $uName = htmlspecialchars($_POST["uName"] ?? '', ENT_QUOTES, 'UTF-8');
    $uId = htmlspecialchars($_POST["uId"] ?? '', ENT_QUOTES, 'UTF-8');
    $uGender = htmlspecialchars($_POST["uGender"] ?? '未提供', ENT_QUOTES, 'UTF-8');
    $uPhone = htmlspecialchars($_POST["uPhone"] ?? '', ENT_QUOTES, 'UTF-8');
    $uMail = htmlspecialchars($_POST["uMail"] ?? '', ENT_QUOTES, 'UTF-8');
    $uDomain = htmlspecialchars($_POST["uDomain"] ?? '', ENT_QUOTES, 'UTF-8');
    $uEatingHabits = htmlspecialchars($_POST["uEatingHabits"] ?? '一般(葷食)', ENT_QUOTES, 'UTF-8');
    $uLine = htmlspecialchars($_POST["uLine"] ?? '', ENT_QUOTES, 'UTF-8');
    $uExpect = htmlspecialchars($_POST["uExpect"] ?? '80', ENT_QUOTES, 'UTF-8');
    $uQuestion = htmlspecialchars($_POST["uQuestion"] ?? '無', ENT_QUOTES, 'UTF-8');

    // 處理 checkbox 陣列：將陣列轉換為逗號分隔的字串，才能存進資料庫的單一欄位
    $uActivityArray = $_POST["uActivity"] ?? []; 
    $uActivityStr = implode("、", array_map(function($item) {
        return htmlspecialchars($item, ENT_QUOTES, 'UTF-8');
    }, $uActivityArray));

    // ========================================================
    // 2. 資料庫連線與寫入
    // ========================================================
    $servername = "資料庫伺服器";
    $username = "資料庫帳號";
    $password = "資料庫密碼"; 
    $dbname = "資料庫名稱";

    // 預設一個變數來判斷是否寫入成功
    $isSaved = false;
    $errorMsg = '';

    try {
        // 建立連線
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // 準備 SQL 寫入語法
        $sql = "INSERT INTO students (uName, uId, uGender, uPhone, uMail, uDomain, uEatingHabits, uLine, uActivity, uExpect, uQuestion) 
                VALUES (:uName, :uId, :uGender, :uPhone, :uMail, :uDomain, :uEatingHabits, :uLine, :uActivity, :uExpect, :uQuestion)";
        
        $stmt = $pdo->prepare($sql);
        
        // 綁定變數並執行寫入
        $stmt->execute([
            ':uName' => $uName,
            ':uId' => $uId,
            ':uGender' => $uGender,
            ':uPhone' => $uPhone,
            ':uMail' => $uMail,
            ':uDomain' => $uDomain,
            ':uEatingHabits' => $uEatingHabits,
            ':uLine' => $uLine,
            ':uActivity' => $uActivityStr,
            ':uExpect' => $uExpect,
            ':uQuestion' => $uQuestion
        ]);

        $isSaved = true; // 標記寫入成功

    } catch(PDOException $e) {
        $errorMsg = $e->getMessage(); // 捕捉錯誤訊息
    }
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>報名結果</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #9AF7F4; }
        .success-box { background-color: white; border-radius: 15px; padding: 40px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); max-width: 600px; margin: 50px auto; }
    </style>
</head>
<body>
    <div class="container">
        <div class="success-box">
            
            <?php if ($isSaved): ?>
                <!-- 資料庫寫入成功 -->
                <h2 class="text-center text-success fw-bold mb-4">✅ 報名成功！</h2>
                <p class="text-center text-muted mb-4">你的報名資料已經完整送出。</p>
                <div class="alert alert-success text-center">
                    歡迎 <strong><?= $uName ?></strong> 加入資管系大家庭！<br>
                    你的學號：<?= $uId ?>
                </div>
            <?php else: ?>
                <!-- 資料庫寫入失敗 -->
                <h2 class="text-center text-danger fw-bold mb-4">❌ 報名失敗</h2>
                <div class="alert alert-danger">
                    抱歉，系統發生錯誤，資料無法儲存。<br>
                    <small>錯誤訊息：<?= $errorMsg ?></small>
                </div>
            <?php endif; ?>

            <div class="text-center mt-4">
                <a href="index.php" class="btn btn-primary px-4">回首頁</a>
            </div>
        </div>
    </div>
</body>
</html>
