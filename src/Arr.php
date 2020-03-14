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
}
