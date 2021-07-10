# 0711レビューに際して
- 今回の成果は２点あって、１つ目は以下リンク　のRead.me　## 0703,4変更点>### favorit関連機能の追加 です。
  - https://github.com/onoderayuuki/EcSite
- ２点目が上記サイトのLaravel移植です。半端ですがフレームワークを使うことによるMVC分離やroutingの威力を感じました。
# Moonlight-laravel
## 感想
- 環境構築はDocker
  - 全面的な参考　https://qiita.com/ucan-lab/items/5fc1281cd8076c8ac9f4
  - docker-composeに追記するだけでphpMyAdminも追加できる！　https://qiita.com/ucan-lab/items/a0c8d6d73aca03325362
    - 設定そのままだとポート被りでエラーになるので要変更
- ログイン等の機能は省略し、一覧と編集ページのみの実装（を目指した
- 元ソースでは各ページの上部PHPで記載していた場合わけやデータ取得をrouteにまとめてしかもシンプルに記載できたことに凄さを感じた
- PHP→JSへの変数渡しがHTMLへの渡し方と異なっていて手間取った（@jsonで変換が必要）
- SQL書けないのはストレスだったけどupdateOrCreateは便利。
