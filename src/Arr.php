<?php

namespace Renzhifan\Arr;

class Arr
{
    /**
     * @param [type] $arr
     * @param [type] $keys
     * @param string $type
     * @return array
     */
    public static function arraySort($arr, $keys, $type = ""): array
    {
        $keysvalue = $new_array = array();
        foreach ($arr as $k => $v) {
            $keysvalue[$k] = $v[$keys];
        }
        if ($type == 'asc') {
            asort($keysvalue);
        } else {
            arsort($keysvalue);
        }
        reset($keysvalue);
        foreach ($keysvalue as $k => $v) {
            $new_array[] = $arr[$k];
        }
        return $new_array;
    }

    /**
     *生成一段时间的默认数据
     * @param [type] $intStartDay 20200121
     * @param [type] $intEndDay 20200321
     * @param string $format
     * @return void
     */
    public static function getTimeRange($intStartDay, $intEndDay, $format = 'Ymd')
    {
        $startTimeStamp = strtotime($intStartDay);
        $endTimeStamp = strtotime($intEndDay) - 86400;
        $curTime = $startTimeStamp;
        $timeRange = array();
        for ($curTime; $curTime <= $endTimeStamp; $curTime += 86400) {
            $curDate = date($format, $curTime);
            $timeRange[$curDate] = 0;
        }
        return $timeRange;
    }

    /**
     * 生成指定长度的随机字符串
     * @param [type] $length
     */
    public static function getRandStr($length)
    {
        $str = '';
        $strPool = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz';
        $max = strlen($strPool) - 1;

        for ($i = 0; $i < $length; $i++) {
            $str .= $strPool[mt_rand(0, $max)];
        }

        return $str;
    }

    /**
     * PHP 使用mb_*系列函数实现反转中文字符串：
     * @param [type] $str
     */
    public static function reverseStr($str)
    {
        $r = array();
        for ($i = 0; $i < mb_strlen($str); $i++) {
            $r[] = mb_substr($str, $i, 1, 'UTF-8');
        }
        return implode(array_reverse($r));
    }

    /**
     *求一个数组中出现最多的值
     * @param [type] $array
     * @return void
     */
    public static function getMaxCountValue($arr)
    {
        $array2 = array_count_values($arr);   // 统计数组中所有值出现的次数
        arsort($array2);                        // 按照键值对关联数组进行降序排序
        $first = reset($array2);
        $firstKey = key($array2);
        return [$firstKey, $first];
    }

    /**
     * 反转数组
     * @param [type] $arr
     * @return void
     */
    public static function reverseArray($arr)
    {
        $n = count($arr);
        $left = 0;
        $right = $n - 1;

        while ($left < $right) {
            $temp = $arr[$left];
            $arr[$left++] = $arr[$right];
            $arr[$right--] = $temp;
        }

        return $arr;
    }
}
