https://github.com/shin1x1/laravel-ddd-sample
https://speakerdeck.com/shin1x1/201703-ddd-with-laravel

MyApp
    QA
        Application
            Controllers
            Requests
            UseCases
        Domain
            Models
        Infrastructure
            DAOs
            Repositories

# 輪読アプリ
##  データ
- 輪読会
    - 対象の本(1)
    - 主催者(N)
    - 参考URL(N)
- 輪読メンバー
    - アカウント(N)
- 輪読スケジュール
    - 対象の章/範囲
    - リアル輪読会の日時予定
- スケジュールごとのディスカッション
    - 対象の章の概要
    -オンラインのディスカッション
        - 投稿者、内容、日時
    - 輪読会の議事録
