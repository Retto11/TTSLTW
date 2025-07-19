<?php

namespace App\Helpers;

class StringHelper
{
    public static function removeVietnameseTones($str)
    {
        $accents = [
            'a' => 'áàạảãâấầậẩẫăắằặẳẵ',
            'e' => 'éèẹẻẽêếềệểễ',
            'i' => 'íìịỉĩ',
            'o' => 'óòọỏõôốồộổỗơớờợởỡ',
            'u' => 'úùụủũưứừựửữ',
            'y' => 'ýỳỵỷỹ',
            'd' => 'đ',
        ];

        foreach ($accents as $non => $marked) {
            $str = preg_replace("/[" . $marked . "]/u", $non, $str);
        }

        return $str;
    }
}
