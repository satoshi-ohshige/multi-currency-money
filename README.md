# multi-currency-money

## 準備
```
git clone git@github.com:satoshi-ohshige/multi-currency-money.git
cd multi-currency-money
docker build -t multi-currency-money-php8 .
docker run --rm -v `pwd`:/app -it multi-currency-money-php8 composer install
```

## 実行
```
docker run --rm -v `pwd`:/app -it multi-currency-money-php8 php src/index.php
docker run --rm -v `pwd`:/app -it multi-currency-money-php8 vendor/bin/phpunit tests/
```
