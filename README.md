# Doctrine2 Associtaion Test

## [ドキュメント](http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/tutorials/getting-started.html#generating-the-database-schema)にあるとおり`vendor/bin/doctrine orm:schema-tool:create` としてもデータベースが作成されない

[こちら](https://github.com/doctrine/DoctrineBundle/issues/351#issuecomment-70052412) によると`doctrine/dbal` が `2.5` 以上だと起こるらしい。当チュートリアルは以下の`composer.lock`の内容にある通り該当する。


```javascript
// composer.lock
{
    "name": "doctrine/dbal",
    "version": "v2.5.1",
      :
}
```

`server_version`という項目を記述せよとの助言もあり試してみたがダメだった。よって当チュートリアルではDBをあらかじめ作っておく。

## Refs.

* http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/tutorials/getting-started.html
