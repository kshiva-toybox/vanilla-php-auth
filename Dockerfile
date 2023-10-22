# 公式のPHPイメージをベースとして使用
FROM php:8.2-cli

# ホストマシンの同階層のindex.phpをコンテナの/var/www/htmlディレクトリにコピー
COPY index.php /var/www/html/index.php

# ビルトインサーバを起動するコマンドを設定
CMD [ "php", "-S", "0.0.0.0:80", "-t", "/var/www/html" ]
