<?php
use Symfony\Component\DomCrawler\Crawler;
use Auth;

class aliexpress implements ParseContract
{
    
    public $crawler;
    public function __construct()
    {
        set_time_limit(0);
        header('Content-Type: text/html; charset=utf-8');
    }

    public function getParse()
    {
  
        $file = file_get_contents($url);
        $this->crawler = new Crawler($file);
		$this->crawler->filter('.list-item')->each(function(Crawler $node, $i){
   $name = $node->text();
   $pic = $node->filter('img')->attr('src');
   echo $name;
   echo ' - '.$pic; 
});
    }
}