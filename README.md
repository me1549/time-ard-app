# 打刻アプリ
## 概要
飲食店や商業施設などのスタッフの出勤時間・退勤時間を管理するWebアプリケーションです。

URL: http://times-card-app.herokuapp.com/

## 利用方法

初めての方はまず右上の「新規スタッフ登録」からスタッフの登録を行います。
名前（フルネーム）、メールアドレス、パスワード(8文字以上)を入力して登録してください。
<br>

<img width="700" alt="スクリーンショット 2022-04-03 16 13 14" src="https://user-images.githubusercontent.com/64354869/161416551-dd3bc1a2-207e-433a-9b94-24d5e309bf88.png">
<br>

<img width="633" alt="スクリーンショット 2022-04-03 16 14 55" src="https://user-images.githubusercontent.com/64354869/161416610-6d50af0b-4ee8-48ac-9696-c566a5aeae14.png">

登録済みの方は右上の「ログイン」からメールアドレスとパスワードを入力してログインしてください。

![スクリーンショット 2022-04-03 16 31 02](https://user-images.githubusercontent.com/64354869/161416701-e495f3aa-258e-4b1a-9136-e6accda1dad7.png)


次に右上の「打刻する」から「出勤」にチェックをつけて「打刻する」をクリックします。

<img width="700" alt="スクリーンショット 2022-04-03 16 16 13" src="https://user-images.githubusercontent.com/64354869/161416854-149cc6bb-daa7-4d99-be4c-d4f7ccde3740.png">

<img width="389" alt="スクリーンショット 2022-04-03 16 16 38" src="https://user-images.githubusercontent.com/64354869/161416868-e364edc3-4dd2-4109-8f11-f37a4903f43c.png">

トップページに「(名前さん）が（現在の時間）に出勤しました。」と表示されれば出勤完了です。業務を開始してください。

<img width="700" alt="スクリーンショット 2022-04-03 16 17 18" src="https://user-images.githubusercontent.com/64354869/161416903-5e05d615-bf2d-4f44-8210-26659e6c6dd6.png">

退勤する際は右上の「打刻する」から「退勤」にチェックをつけて「打刻する」をクリックします。

<img width="283" alt="スクリーンショット 2022-04-03 16 18 11" src="https://user-images.githubusercontent.com/64354869/161417095-79cce17a-5b10-44d7-b89c-c94d8f59f23f.png">

<img width="700" alt="スクリーンショット 2022-04-03 16 18 28" src="https://user-images.githubusercontent.com/64354869/161417142-af8c01f3-4ee0-40fe-afd1-618be5e93a7c.png">

トップページに「(名前さん）が（現在の時間）に退勤しました。」と表示されれば退勤完了です。ログアウトして帰宅してください。お疲れ様でした。

## 使用技術
- PHP(laravel)
- JavaScript
- bootstrap
- postgresSQL
- nginx


