<?php

namespace app\components;

use yii\data\Pagination;
use yii\helpers\Url;

class PaginationHelper
{
    /**
     * @param Pagination $pagination
     * @param string $route
     * @param string|null $search
     * @param string $trashed
     * @param int $page
     * @return array
     */
    public static function getLinks(Pagination $pagination, string $route = 'index', string $search = null, int $start_year = null, $trashed_button = null,
        $business_org_code = null, $one_or_three = null,  int $page =  1)
    {
        $pageCount = $pagination->getPageCount();

        $links = [];
        if ($pageCount > 1) {
            $params = [];
            if (isset($search)) {
                $params['search'] = $search;
            }
            if (isset($start_year)) {
                $params['start_year'] = $start_year;
            }
            if (isset($trashed_button)) {
                $params['trashed_button'] = $trashed_button;
            }
            if (isset($business_org_code)) {
                $params['business_org_code'] = $business_org_code;
            }
            if (isset($one_or_three)) {
                $params['one_or_three'] = $one_or_three;
            }
            $links[] = [
                'url' => $page > 1 ? Url::toRoute(array_merge($params, [$route, 'page' => $page - 1])) : null,
                'label' => 'Назад',
                'active' => false
            ];

            for ($i = 1; $i <= $pageCount; $i++) {
                $links[] = [
                    'url' => Url::toRoute(array_merge($params, [$route, 'page' => $i])),
                    'label' => $i,
                    'active' => $page == $i
                ];
            }

            $links[] = [
                'url' => $page < $pageCount ? Url::toRoute(array_merge($params, [$route, 'page' => $page + 1])) : null,
                'label' => 'Вперед',
                'active' => false
            ];
        }
        return $links;
    }
}
