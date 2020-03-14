# 常用的 PHP 数组处理方法

## 安装组件

```
composer require renzhifan/arr
```

## 功能介绍

### 对二维数组进行排序

```php
$arr = [
        'a' => ['a' => 1],
        'b' => ['a' => 2],
        'c' => ['a' => 3],
        'd' => ['a' => 4],
    ];
 $sortArr=\Renzhifan\Arr\Arr::arraySort($arr, 'a', 'asc');
```

### 生成一段时间的默认数据

```php
$timeRange=\Renzhifan\Arr\Arr::getTimeRange(20200121, 20200321, 'Y-m-d');
```
