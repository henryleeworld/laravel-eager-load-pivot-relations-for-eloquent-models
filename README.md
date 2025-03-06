# Laravel 11 Eloquent 模型預載入 pivot 屬性關聯

引入 ajcastro 的 eager-load-pivot-relations 套件來擴增預載入使用 `pivot` 屬性存取中介資料表的資料，要操作多對多關聯需要一個中介的資料表，當透過 `pivot` 屬性存取 Eloquent 關聯時，該關聯資料會被延遲載入。意指該關聯資料直到第一次以屬性存取前，實際上並沒有被載入。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/user/cars` 來進行車子和使用者反向多對多的關聯分頁顯示。

----

## 畫面截圖
![](https://i.imgur.com/Zt8XJpe.png)
> 如果 `pivot` 資料表包含了其他的屬性，可以在定義關聯方法時指定那些欄位
