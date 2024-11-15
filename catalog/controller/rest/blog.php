<?php
/**
 * guest.php
 *
 * Guest customer management
 *
 * @author     Opencart-api.com
 * @copyright  2017
 * @license    License.txt
 * @version    2.0
 * @link       https://opencart-api.com/results/shopping-cart-rest-api/
 * @documentations https://opencart-api.com/opencart-rest-api-documentations/
 */
require_once(DIR_SYSTEM . 'engine/restcontroller.php');

class ControllerRestBlog extends RestController
{

    //blogs
    public function blog()
    {

        $this->checkPlugin();

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            $this->load->model('blog/blog');
            if (isset($this->request->get['blog_id']) && ctype_digit($this->request->get['blog_id'])) {
                $this->getBlogById($this->request->get['blog_id']);
            } else {
                $this->getBlogs();
            }
        } else {
            $this->statusCode = 405;
            $this->allowedHeaders = array("GET");
        }

        return $this->sendResponse();
    }

    public function getBlogById($blog_id){
        $results = $this->model_blog_blog->getBlog($blog_id);

        $keywords = $this->model_blog_blog->getBlogToKeywords($results['blog_id']);
        $blog_keywords = array(); 
    
        foreach($keywords as $keyword) {
            $blog_keywords[] = $keyword['name'];
        }

        if(!empty($results['image'])){
            $image = $this->urlPrefix.'image/'.$results['image'];
        }else{
            $image = $this->urlPrefix.'image/cache/no_image-100x100.png';
        }
        $this->json['data'][] = array(
            'blog_id' => $results['blog_id'],
            'title' => $results['title'],
            'content' => $results['content'],
            'image' => $image,
            'keywords' => $blog_keywords
        );
        
    }

    public function getBlogs(){
        $this->load->model('tool/image');
        $filter_data = array(
            'sort'  => 'article_id',
            'order' => 'DESC',
            'page'  => 1,
            'start' => 1,
            'limit' => $this->config->get('config_limit_admin')
        );

        if (isset($this->request->get['limit']) && ctype_digit($this->request->get['limit'])) {
            $filter_data['limit'] = $this->request->get['limit'];
        }

        if (isset($this->request->get['page']) && ctype_digit($this->request->get['page'])) {
            $filter_data['start'] = $this->request->get['page'];
            $filter_data['page'] = $this->request->get['page'];
        }

        $filter_data['start'] = ($filter_data['start'] - 1) * $filter_data['limit'];

        $results = $this->model_blog_blog->getBlogs($filter_data);

        foreach ($results as $result) {
            $keywords = $this->model_blog_blog->getBlogToKeywords($result['blog_id']);
			$blog_keywords = array(); 
            if($result['content']){
                $content =  html_entity_decode($result['content']);
                $content =  strip_tags($content);
                $content  = explode(" ", $content);
                $content = implode(" ", array_slice($content, 0, 10))."...";
            }else{
                $content='';
            }
			foreach($keywords as $keyword) {
				$blog_keywords[] = $keyword['name'];
			}
            $this->json['data']['blogs'][] = array(
                'blog_id' => $result['blog_id'],
                'title' => $result['title'],
                'content' => $content,
                'image' =>  $result['image'] ? $this->urlPrefix.'image/'.$result['image'] : $this->urlPrefix.'image/no_image.png',
                'keywords' => $blog_keywords
            );
        }

        $total = $this->model_blog_blog->getTotalBlogs($filter_data);
        $this->json['data']['total_blogs'] = (int)$total;
        $this->json['data']['current_page'] = (int)$filter_data['page'];
        $this->json['data']['pages'] = ceil($total / $filter_data['limit']);
    }
    //end blogs

    //keywords
    public function keywords()
    {

        $this->checkPlugin();
        $this->load->model('blog/blog');

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $this->getKeywords();
        } else {
            $this->statusCode = 405;
            $this->allowedHeaders = array("GET");
        }

        return $this->sendResponse();
    }

    public function getKeywords(){

        $results = $this->model_blog_blog->getKeywords();

        foreach($results as $result){
            $this->json['data'][] = array(
                'keyword_id' => $result['keyword_id'],
                'name' => $result['name']
            );
        }
    }
}    