<?php

require_once DIR . "/dao/DaoBlog.class.php";
require_once DIR . "/dao/DaoUser.class.php";
require_once DIR . "/dao/DaoComment.class.php";

class Tools {

    public static function _pageInfo($page, $total, $limit, $have_page = 7) {
        if ($total <= 0) {
            return false;
        }
        //总共有多少页
        // 10 / 10 = 1  11/10 = 2
        $page_max = ceil($total / $limit);

        if ($page < 0) {
            $page = 1;
        }

        if ($page > $page_max) {
            $page = $page_max;
        }

        //3 
        $mid = intval($have_page / 2);

        if ($page + $mid > $page_max) {
            $page_start = $page_max - $have_page + 1 > 1 ? $page_max - $have_page + 1 : 1;
        } else {
            $page_start = $page - $mid > 1 ? $page - $mid : 1;
        }

        if ($page - $mid > 1) {
            $page_end = $page + $mid > $page_max ? $page_max : $page + $mid;
        } else {
            $page_end = $have_page > $page_max ? $page_max : $have_page;
        }

        for ($i = $page_start; $i <= $page_end; $i++) {
            $page_arr[] = $i;
        }

        $pageInfo['page'] = $page;
        $pageInfo['total'] = $total;
        $pageInfo['page_max'] = $page_max;
        $pageInfo['page_arr'] = $page_arr;
        $pageInfo['start'] = ($page - 1 ) * $limit;
        $pageInfo['limit'] = $limit;
        return $pageInfo;
    }

    public static function formartBlogList($list) {
        if (empty($list)) {
            return false;
        }
        $blog_type = array(
            1 => "历史迷雾",
            2 => '个人心路',
            3 => '技术控',
            4 => '学习心得'
        );
        $DaoUser = new DaoUser();
        $DaoComment = new DaoComment();
        foreach ($list as $key => $value) {

            $list[$key]['create_time'] = date("Y-m-d H:i:s", $value['create_time']);
            $content = strip_tags($value['blog']);

            //经典的汉字截断方法
            if (mb_strlen($content, "UTF-8") > 200) {
                $content = mb_substr($content, 0, 200, 'UTF-8') . "...";
            }

            $list[$key]['blog_type_name'] = $blog_type[$value['blog_type']];
            $list[$key]['blog'] = $content;

            $user_info = $DaoUser->getUserInfoByUserId($value['user_id']);
            $list[$key]['user_info'] = $user_info[0];


            $total = $DaoComment->getTotalCommentByBlogId($value['id']);
            $list[$key]['comment_total'] = $total;
        }
        return $list;
    }

}
