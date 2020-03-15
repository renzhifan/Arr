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

### 生成指定长度的随机字符串

```php
$randStr=\Renzhifan\Arr\Arr::getRandStr(9);
```

### 使用 mb\_\*系列函数实现反转中文字符串：

```php
$reverseStr=\Renzhifan\Arr\Arr::reverseStr("你好啊");
```

### 求一个数组中出现最多的值

```php
$array = array(1, 1, 1, 54, 3, 4, 3, 4, 3, 14, 3, 4, 3, 7, 8, 9, 12, 45, 66, 5, 7, 8, 9, 2, 45, 3);
list($key, $count) = \Renzhifan\Arr\Arr::getMaxCountValue($array);
echo "数组中数字{$key}重复次数最多，为:{$count}次";
```

### 反转数组

```php
$arr = [11, 22, 33, 44, 55, 66, 77];

// 输出：[77,66,55,44,33,22,11]
echo json_encode(\Renzhifan\Arr\Arr::reverseArray($arr));
```
