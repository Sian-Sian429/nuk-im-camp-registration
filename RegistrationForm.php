<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2025 高雄大學資管系迎新 - 活動流程與報名</title>
    <!-- 引入 Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- 引入 Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        :root {
            --nuk-blue: #006cff;
            --bg-gradient: linear-gradient(135deg, #e0f7fa 0%, #9AF7F4 100%);
        }

        /* 鎖定 Body 隱藏卷軸 */
        body { 
            background: var(--bg-gradient); 
            font-family: "Microsoft JhengHei", sans-serif;
            height: 100vh;
            overflow: hidden;
            margin: 0;
            display: flex;
            align-items: center;
        }

        /* 主容器：撐滿畫面 */
        .main-container {
            max-width: 1600px;
            width: 98%;
            height: 96vh;
            margin: 0 auto;
        }

        /* 內容白框 */
        .content-box { 
            background-color: white; 
            border-radius: 16px; 
            padding: 2vh 2vw; 
            box-shadow: 0 10px 25px rgba(0,0,0,0.1); 
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .page-title { color: var(--nuk-blue); font-weight: 800; text-shadow: 1px 1px 2px rgba(0,0,0,0.1); }
        .section-title { color: #495057; border-left: 5px solid var(--nuk-blue); padding-left: 8px; font-weight: 700; margin-bottom: 10px;}

        /* 左側表格空間微調，避免撐破高度 */
        .schedule-table td, .schedule-table th { 
            padding: 0.5rem 0.5rem; 
            font-size: 0.95rem; 
        }
        .table-dark { background-color: #343a40; }

        /* 右側表單緊湊化 */
        .form-label { font-size: 0.85rem; margin-bottom: 0.2rem; }
        .form-control-sm, .form-select-sm { font-size: 0.85rem; }
        
        fieldset { border: 1px solid #dee2e6; border-radius: 8px; padding: 4px 12px; background-color: #f8f9fa; }
        fieldset legend { float: none; width: auto; padding: 0 5px; font-size: 0.85rem; font-weight: bold; color: #495057; margin-bottom: 0;}
        
        .form-check-label { font-size: 0.8rem; }
        .invalid-feedback { font-size: 0.75rem; margin-top: 0; }

        /* 按鈕 hover 動畫 */
        .btn-animate { transition: transform 0.2s ease; }
        .btn-animate:hover { transform: scale(1.03); }

        /* 若螢幕太小（手機），自動解除隱藏卷軸限制並改為上下堆疊 */
        @media (max-width: 991px) {
            body { height: auto; overflow: auto; padding: 15px 0; }
            .main-container { height: auto; }
            .border-start { border-left: none !important; margin-top: 20px; padding-top: 20px; border-top: 1px solid #dee2e6; }
        }
    </style>
</head>
<body>
    <div class="container-fluid main-container">
        <div class="content-box">
            
            <h3 class="text-center page-title mb-2">
                <i class="bi bi-rocket-takeoff-fill"></i> NUK IM 迎新活動與報名表
            </h3>

            <!-- 左右雙欄佈局 -->
            <div class="row flex-grow-1 overflow-hidden">
                
                <!-- 左側：活動流程表 -->
                <div class="col-lg-5 d-flex flex-column pe-lg-4">
                    <h5 class="section-title"><i class="bi bi-calendar3"></i> 活動流程</h5>
                    <div class="table-responsive flex-grow-1 border rounded shadow-sm">
                        <table class="table schedule-table table-striped table-hover text-center align-middle m-0 h-100">
                            <thead class="table-dark">
                                <tr>
                                    <th style="width: 35%">時間</th>
                                    <th>活動內容</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>09:30 - 10:00</td><td><i class="bi bi-door-open text-success"></i> 報到入場</td></tr>
                                <tr><td>10:00 - 10:30</td><td>迎展開場 & 致詞 🎤</td></tr>
                                <tr><td>10:30 - 11:00</td><td>學長姐經驗分享 💡</td></tr>
                                <tr><td>11:00 - 12:00</td><td>程式互動體驗 🖥</td></tr>
                                <tr><td>12:00 - 13:30</td><td>午餐 & 交流 🍱</td></tr>
                                <tr><td>13:30 - 14:30</td><td>趣味團隊挑戰 🏆</td></tr>
                                <tr><td>14:30 - 15:30</td><td>資管未來與資源 📊</td></tr>
                                <tr><td>15:30 - 16:00</td><td>頒獎 & 大合照 📸</td></tr>
                                <tr><td>16:00</td><td><i class="bi bi-flag-fill text-danger"></i> 滿載而歸 🎊</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center mt-2">
                        <a href="index.php" class="btn btn-outline-secondary btn-sm rounded-pill px-4 py-1 fw-bold">
                            <i class="bi bi-arrow-left"></i> 返回首頁
                        </a>
                    </div>
                </div>

                <!-- 右側：報名表單 -->
                <div class="col-lg-7 border-start ps-lg-4 d-flex flex-column">
                    <h5 class="section-title"><i class="bi bi-pencil-square"></i> 填寫報名表</h5>
                    
                    <form action="Info.php" method="POST" class="needs-validation h-100 d-flex flex-column justify-content-between" novalidate>
                        
                        <!-- 第一列：姓名、學號、性別 -->
                        <div class="row g-2 mb-2">
                            <div class="col-md-4">
                                <label class="form-label fw-bold">姓名 <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm" name="uName" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fw-bold">學號 <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm" name="uId" placeholder="例:A112XXXX" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fw-bold">生理性別 <span class="text-danger">*</span></label>
                                <div class="d-flex gap-2 px-2 pt-1">
                                    <div class="form-check form-check-inline m-0">
                                        <input class="form-check-input" type="radio" name="uGender" value="男" required> 男
                                    </div>
                                    <div class="form-check form-check-inline m-0">
                                        <input class="form-check-input" type="radio" name="uGender" value="女" required> 女
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 第二列：電話、Email -->
                        <div class="row g-2 mb-2">
                            <div class="col-md-5">
                                <label class="form-label fw-bold">聯絡電話 <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control form-control-sm" name="uPhone" placeholder="09XXXXXXXX" pattern="09[0-9]{8}" required>
                            </div>
                            <div class="col-md-7">
                                <label class="form-label fw-bold">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control form-control-sm" name="uMail" placeholder="學校信箱或常用信箱" required>
                            </div>
                        </div>

                        <!-- 第三列：區域、飲食、LINE ID -->
                        <div class="row g-2 mb-2">
                            <div class="col-md-3">
                                <label class="form-label fw-bold">居住區域</label>
                                <select class="form-select form-select-sm" name="uDomain">
                                    <option value="北部">北部</option>
                                    <option value="中部">中部</option>
                                    <option value="南部" selected>南部</option>
                                    <option value="西部">西部</option>
                                    <option value="離島">離島</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fw-bold">飲食習慣</label>
                                <select class="form-select form-select-sm" name="uEatingHabits">
                                    <option value="一般(葷食)" selected>一般 (葷食)</option>
                                    <option value="素食">素食</option>
                                    <option value="不吃牛">不吃牛</option>
                                    <option value="其他">其他 (請備註)</option>
                                </select>
                            </div>
                            <div class="col-md-5">
                                <label class="form-label fw-bold">LINE ID</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text"><i class="bi bi-line text-success"></i></span>
                                    <input type="text" class="form-control" name="uLine" placeholder="您的 LINE ID">
                                </div>
                            </div>
                        </div>

                        <!-- 第四列：期待值 -->
                        <div class="row g-2 mb-2">
                            <div class="col-12 bg-light rounded px-3 py-1 border">
                                <div class="d-flex justify-content-between align-items-end">
                                    <label class="form-label fw-bold mb-0">活動期待值</label>
                                    <span id="rangeValue" class="text-primary fw-bold">80 分</span>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <span class="small text-muted fw-bold" style="font-size: 0.75rem;">1</span>
                                    <input type="range" class="form-range flex-grow-1" name="uExpect" id="expectRange" min="1" max="100" value="80" style="height: 1.2rem;">
                                    <span class="small text-muted fw-bold" style="font-size: 0.75rem;">100</span>
                                </div>
                            </div>
                        </div>

                        <!-- 第五列：期待活動 -->
                        <div class="mb-2">
                            <fieldset>
                                <legend>期待哪些活動 (可複選)</legend>
                                <div class="d-flex flex-wrap gap-2 pt-1">
                                    <div class="form-check form-check-inline m-0">
                                        <input class="form-check-input" type="checkbox" name="uActivity[]" value="認識資管系">
                                        <label class="form-check-label">技術X娛樂</label>
                                    </div>
                                    <div class="form-check form-check-inline m-0">
                                        <input class="form-check-input" type="checkbox" name="uActivity[]" value="歷屆經驗談">
                                        <label class="form-check-label">歷屆經驗談</label>
                                    </div>
                                    <div class="form-check form-check-inline m-0">
                                        <input class="form-check-input" type="checkbox" name="uActivity[]" value="認識夥伴">
                                        <label class="form-check-label">破冰闖關</label>
                                    </div>
                                    <div class="form-check form-check-inline m-0">
                                        <input class="form-check-input" type="checkbox" name="uActivity[]" value="神祕大獎">
                                        <label class="form-check-label">神祕大獎</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <!-- 第六列：備註 -->
                        <div class="mb-2 flex-grow-1 d-flex flex-column" style="min-height: 0;">
                            <label class="form-label fw-bold">其他疑問或備註</label>
                            <textarea class="form-control form-control-sm flex-grow-1" name="uQuestion" style="resize: none;" placeholder="若有特殊需求，請於此處告訴我們..."></textarea>
                        </div>

                        <!-- 底部按鈕區 -->
                        <div class="text-center pt-2 border-top">
                            <button type="submit" class="btn btn-primary btn-sm px-5 btn-animate shadow-sm"><i class="bi bi-send-fill"></i> 確認送出</button>
                            <button type="reset" class="btn btn-outline-secondary btn-sm px-4 ms-2 btn-animate">清除</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- 引入 Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Bootstrap 表單防呆驗證
        (function () {
          'use strict'
          const forms = document.querySelectorAll('.needs-validation')
          Array.prototype.slice.call(forms).forEach(function (form) {
              form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                  event.preventDefault()
                  event.stopPropagation()
                }
                form.classList.add('was-validated')
              }, false)
              
              form.addEventListener('reset', function(){
                  form.classList.remove('was-validated');
              })
          })
        })()

        // 期待值分數即時顯示
        const rangeInput = document.getElementById('expectRange');
        const rangeValueDisplay = document.getElementById('rangeValue');
        rangeInput.addEventListener('input', function() {
            rangeValueDisplay.textContent = this.value + ' 分';
        });
    </script>
</body>
</html>
