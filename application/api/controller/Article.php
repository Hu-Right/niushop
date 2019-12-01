<?php
/**
 * Article.php
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace app\api\controller;

use data\service\Article as ArticleService;

class Article extends BaseController
{

    /**
     * 获取文章详情
     * 
     * @return Ambigous <\think\response\View, \think\response\$this, \think\response\View>
     */
    public function getArticleDetail()
    {
        $title = "获取文章详情";
        $article_id = request()->post('article_id', 0);
        if (! is_numeric($article_id)) {       
            return $this->outMessage($title, "", "-50", "无法获取文章信息");
            // return $this->ajaxReturn([
            //     'code'=>402,
            //     'msg'=>'无法获取文章信息',
            //     'data'=>[
            //         'title'=>$title
            //     ]
            // ]);
            #outmessage 返回数据格式
        }
        $article = new ArticleService();
        $article_detail = $article->getArticleDetail($article_id);
        if (empty($article_detail)) {
           return $this->outMessage($title, "", "-50", "无法获取文章信息");
         
         }
        $article -> updateArticleClickNum($article_id);
        // 上一篇
        $prev_info = $article->getArticleList(1, 1, [
            "article_id" => array(
                "<",
                $article_id
            ),
            "nca.class_id" => $article_detail["class_id"],
            "status" => 2
        ], "article_id desc");
        
        // 下一篇
        $next_info = $article->getArticleList(1, 1, [
            "article_id" => array(
                ">",
                $article_id
            ),
            "nca.class_id" => $article_detail["class_id"],
            "status" => 2
        ], "article_id asc");
        if (! empty($prev_info['data'][0]['content']))
            unset($prev_info['data'][0]['content']);
        if (! empty($next_info['data'][0]['content']))
            unset($next_info['data'][0]['content']);
        $data = array(
            'prev_info' => $prev_info['data'][0],
            'next_info' => $next_info['data'][0],
            'article_detail' => $article_detail
        );

       
    return $this->outMessage($title, $data);
    }

    /**
     * 获取分类下文章列表
     */
    public function getArticleList()
    {
        $title = "获取文章分类下的文章列表";
        $class_id = request()->post('class_id', '0');
        $condition = array();
        if ($class_id != 0) {
            $condition['nca.class_id'] = $class_id;
        }
        $page = request()->post("page", 1);
        if (! is_numeric($class_id)) {
            return $this->outMessage($title, "", "-50", "无法获取分类信息");
        }
        $article = new ArticleService();
        $article_list = $article->getArticleList($page, PAGESIZE, $condition, 'nca.sort desc');
        return $this->outMessage($title, $article_list);
    }

    /**
     * 获取文章分类
     */
    public function getArticleClass()
    {
        $title = "获取文章分类";
        $article = new ArticleService();
        $platform_help_class = $article->getArticleClassQuery();
        return $this->outMessage($title, $platform_help_class);
    }
}