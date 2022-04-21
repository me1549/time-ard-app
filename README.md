# 打刻アプリ
## 概要

飲食店や商業施設などのスタッフの出勤時間と退勤時間を管理するwebアプリケーションです。<br/>
URL: http://times-card-app.herokuapp.com/

## 出勤方法
### 1.右上の「ログイン」からメールアドレスとパスワードを入力してログインしてください。初出勤の方は右上の「新規スタッフ登録」から名前、メールアドレス、パスワードを入力して登録をしてください。

<img width="1434" alt="スクリーンショット 2022-04-03 16 13 14" src="https://user-images.githubusercontent.com/64354869/161506953-f2136d18-475f-482f-8455-1b347d2d7144.png">

![スクリーンショット 2022-04-03 16 31 02](https://user-images.githubusercontent.com/64354869/161511726-79703c9a-eeec-4b66-8609-2e5c7b802f38.png)

<img width="633" alt="スクリーンショット 2022-04-03 16 14 55" src="https://user-images.githubusercontent.com/64354869/161507629-8c4e5228-671b-47d2-8ec3-1d7db0fdd6b9.png">

既に同姓同名のスタッフがいる場合、同じ名前で登録できないようになっています。名前の横にあだ名を入力して登録してください。

<img width="573" alt="スクリーンショット 2022-04-04 18 39 28" src="https://user-images.githubusercontent.com/64354869/161519111-25d59777-138f-4344-af45-7502c6258e56.png">

### 2.右上の「打刻する」から「出勤」を選択して「打刻する」をクリックしてください。

<img width="1427" alt="スクリーンショット 2022-04-03 16 16 13" src="https://user-images.githubusercontent.com/64354869/161509686-d5f64eec-a86a-4be6-9286-1aaeff1a7ecc.png">

<img width="389" alt="スクリーンショット 2022-04-03 16 16 38" src="https://user-images.githubusercontent.com/64354869/161509711-754160dc-377b-48e5-bb6d-e2ab0fb3efc3.png">

### 3.トップページに「（名前）さんが（日時）に出勤しました。」と表示されれば出勤完了です。業務を開始してください。

<img width="1433" alt="スクリーンショット 2022-04-03 16 17 18" src="https://user-images.githubusercontent.com/64354869/161510332-bc2294d5-1360-496f-9982-50014a98d587.png">

## 退勤方法
### 1.右上の打刻するから「退勤」を選んで「打刻する」をクリックしてください。

<img width="283" alt="スクリーンショット 2022-04-03 16 18 11" src="https://user-images.githubusercontent.com/64354869/161511088-22540257-f661-4233-9754-5236de545d61.png">

### 2.トップページに「（名前）さんが（日時）に退勤しました。」と表示されれば退勤完了です。右上の「ログアウト」をクリックして帰宅して下さい。

<img width="1431" alt="スクリーンショット 2022-04-03 16 18 28" src="https://user-images.githubusercontent.com/64354869/161511152-82f93907-db63-4822-b9cb-634fa1646631.png">

## 削除方法
### 右のバーから「記録を削除する。」で削除できます。

<img width="1434" alt="スクリーンショット 2022-04-04 19 07 30" src="https://user-images.githubusercontent.com/64354869/161522381-71807b6a-f978-4785-9f32-faec4474a339.png">

## 使用技術
- PHP(Laravel)
- JavaScript
- bootstrap
- postgreSQL

## 工夫した点
新規スタッフ登録の名前にユニーク制約をつけ、同じ名前の方が入社した場合はあだ名を横に入力してもらい、管理する際に区別がつくようにしました。

<img width="1429" alt="スクリーンショット 2022-04-04 18 23 55" src="https://user-images.githubusercontent.com/64354869/161517733-db5fbaa0-c76d-4201-9a87-f60780a44e0e.png">
