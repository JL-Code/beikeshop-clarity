<?php

/**
 * SubtotalService.php
 *
 * @copyright  2022 opencart.cn - All Rights Reserved
 * @link       http://www.guangdawangluo.com
 * @author     Edward Yang <yangjin@opencart.cn>
 * @created    2022-07-22 17:58:25
 * @modified   2022-07-22 17:58:25
 */

namespace Beike\Shop\Services\TotalServices;

class SubtotalService
{
    public static function getTotal($totalService)
    {
        $carts = $totalService->carts;
        return [
            'code' => 'sub_total',
            'value' => collect($carts)->sum('total')
        ];
    }
}
