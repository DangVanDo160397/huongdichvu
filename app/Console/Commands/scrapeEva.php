<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Goutte;
use Sunra\PhpSimple\HtmlDomParser;
use App\Article;
class scrapeEva extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:eva';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        
        // $crawler = Goutte::request('GET', 'https://ione.vnexpress.net/tin-tuc/thoi-trang');//dung hàm scrapeIone()
        // $crawler = Goutte::request('GET', 'https://tinybook.net/my-pham.oh--S3Z2GdGJ');

        // $links = $crawler->filter('div.box h2.title a')->each(function ($node) {
        //     // print($node->text() . "\n") ;
        //     return $node->attr('href');
        // });

        // foreach($links as $link){
        //     // $l = env("NEW_ZING") . $link ;

        //     self::scrapeMyPham($link);
        // }

        $crawler = Goutte::request('GET', 'https://tinybook.net/xit-khoang-my-pham-than-thien-voi-lan-da-phu-nu-trong-mua-he.pgsZ8sox8p5MHtHPW10');
        $title = $crawler->filter('div.box h1.titlechitiet')->each(function ($node) {
            // print($node->text() . "\n") ;
            return $node->text();
        });

        if(isset($title[0])){
            $title = $title[0];
        }else{
            $title = '';
        } 
        $slug =  str_slug($title);
       

        $description = $crawler->filter('div.mota')->each(function ($node) {
            // print($node->text() . "\n") ;
            return $node->text();
        });
        
        if(isset($description[0])){
            $description = $description[0];
        }else{
            $description = '';
        }
        
        $content = $crawler->filter('div.tin p')->each(function ($node) {
            // print($node->text() . "\n") ;
            return $node->html();
        });
        if(isset($content[0])){
            $content = $content[0];
        }else{
            $content = '';
        }
        print($content);
        die();
        $img = $crawler->filter('div.hinh img')->each(function ($node) {
            // print($node->text() . "\n") ;
            return $node->attr('src');
        });

        if(isset($img[0])){
            $img = $img[0];
        }else{
            $img = '';
        }
        
        $data = [
            'article_title' => $title,
            'article_content' => $content,
            'article_description' => $description,
            'article_image' => $img,
            'article_parent_id' => '1',
            'article_slug_name' => $slug
        ];
        Article::create($data);
        print('Lấy dữ liệu thành công!');
        
    }

    public static function scrapeMyPham($url) {
        $crawler = Goutte::request('GET', $url);
        $title = $crawler->filter('div.box h1.titlechitiet')->each(function ($node) {
            // print($node->text() . "\n") ;
            return $node->text();
        });

        if(isset($title[0])){
            $title = $title[0];
        }else{
            $title = '';
        }

        print($title . '\n');
        die();

        
        $slug =  str_slug($title);
       

        $description = $crawler->filter('div.mota')->each(function ($node) {
            // print($node->text() . "\n") ;
            return $node->text();
        });
        
        if(isset($description[0])){
            $description = $description[0];
        }else{
            $description = '';
        }
        
        $content = $crawler->filter('div.tin')->each(function ($node) {
            // print($node->text() . "\n") ;
            return $node->html();
        });
        if(isset($content[0])){
            $content = $content[0];
        }else{
            $content = '';
        }
        
        $img = $crawler->filter('div.hinh img')->each(function ($node) {
            // print($node->text() . "\n") ;
            return $node->attr('src');
        });

        if(isset($img[0])){
            $img = $img[0];
        }else{
            $img = '';
        }
        
        $data = [
            'article_title' => $title,
            'article_content' => $content,
            'article_description' => $description,
            'article_image' => $img,
            'article_parent_id' => '1',
            'article_slug_name' => $slug
        ];
        Article::create($data);
        print('Lấy dữ liệu thành công!');
        
    }

    public static function scrapeIone($url) {
        $crawler = Goutte::request('GET', $url);
        $title = $crawler->filter('div.title_news h1')->each(function ($node) {
            // print($node->text() . "\n") ;
            return $node->text();
        });

        if(isset($title[0])){
            $title = $title[0];
        }else{
            $title = '';
        }
        
        $slug =  str_slug($title);
       

        $description = $crawler->filter('h2.short_intro.txt_666')->each(function ($node) {
            // print($node->text() . "\n") ;
            return $node->text();
        });
        
        if(isset($description[0])){
            $description = $description[0];
        }else{
            $description = '';
        }
        
        $content = $crawler->filter('div.fck_detail.width_common.block_ads_connect')->each(function ($node) {
            // print($node->text() . "\n") ;
            return $node->html();
        });
        if(isset($content[0])){
            $content = $content[0];
        }else{
            $content = '';
        }
        
        $img = $crawler->filter('.fck_detail.width_common.block_ads_connect tr td img')->each(function ($node) {
            // print($node->text() . "\n") ;
            return $node->attr('src');
        });

        if(isset($img[0])){
            $img = $img[0];
        }else{
            $img = '';
        }
        
        $data = [
            'article_title' => $title,
            'article_content' => $content,
            'article_description' => $description,
            'article_image' => $img,
            'article_parent_id' => '2',
            'article_slug_name' => $slug
        ];
        Article::create($data);
        print('Lấy dữ liệu thành công!');
    }
}
