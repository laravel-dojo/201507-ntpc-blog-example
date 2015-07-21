## 新北市樹林國小 Laravel 工作坊 範例程式碼

Laravel Dojo 於 2015/07/06-09、07/11 受邀於 新北市樹林國小 舉辦 Laravel 工作坊，讓參與的學員在 30 個小時內就學會使用 Laravel 5.1 建置一個整合 Open ID 的 Blog 平台。此為課程範例程式碼，課程詳細資訊及內容請參考：<http://www.laravel-dojo.com/workshops/201507-ntpc>

### 警告！

#### 這個範例程式碼僅是配合投影片上的教學順序而撰寫，範例內為配合初學者漸進式學習，許多程式碼並非最佳實踐；程式內的諸多功能、錯誤處理也不完整。目的僅是做為示範與提示，並期能引導學員自行完成不足之處。請勿將這個程式碼佈署至上線機器，若因此造成您的損失恕不負責。

#### 此範例版本為 Laravel 5.1

### 如何使用範例程式碼

1. 下載 或 `git clone git@github.com:laravel-dojo/201507-ntpc-blog-example.git` 
2. 打開 Terminal ，切換至 `201507-ntpc-blog-example` 資料夾
3. 執行 `composer install`
4. 設定您的網站伺服器的文件根目錄 (Document Root) 指向 `201507-ntpc-blog-example/public` 並啟動您的網站伺服器 (請記下您的 http port，如 8000)
5. 設定您的 MySQL 資料庫，建立一個新的 blog_local 資料表，啟動您的 MySQL 伺服器 (請記下您的 MySQL port，如 33060)
6. 打開 `.env` 修改 mysql 連線相關設定
7. 在 Terminal 執行 `php artisan migrate` 確認資料庫連線正確並建立 `migrations` 資料表
8. 在 Terminal 執行 `php artisan db:seed` 將測試資料倒進資料庫
9. 瀏覽 `http://localhost:8000`

### 使用範例程式碼的一些提示

* 若您不熟悉 Laravel 環境建置與設定的細節，請先參考課程投影片內的說明
* 範例在版本控制內的每一個 commit 紀錄，都有對應到投影片上的步驟。因此，您可以透過切換 commit，了解每一個步驟間的差異。

