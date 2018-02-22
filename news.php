<?php

class NewsClass 
{

	public $titleNews;
	public $textNews;
	public $categoryNews;
	public $dateNews;
	public $authorNews;

    public function __construct($titleNews, $textNews, $categoryNews, $dateNews, $authorNews)  
    {
       $this->titleNews = $titleNews;
       $this->textNews = $textNews;
       $this->categoryNews = $categoryNews;  
       $this->dateNews = $dateNews; 
       $this->authorNews = $authorNews;       
    } 

	public function getTitleNews ()
	{
		return $this->titleNews;
	}

	public function getTextNews ()
	{
		return $this->textNews;
	}

	public function getCategoryNews ()
	{
		return $this->categoryNews;
	}

	public function getDateNews ()
	{
		return $this->dateNews;
	}
	public function getAuthorNews ()
	{
		return $this->authorNews;
	}

}

$newsContents = file_get_contents(__DIR__.'/news.json');
$news = json_decode($newsContents, true);

?>

<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>Лента Новостей</title>
</head>
<body>
	<header><h1>Новости Сибири</h1></header>
	
	<section style="width: 70%;">
		<?php 
			foreach ($news as $itemNews){
  				$newItemNews = new NewsClass($itemNews['title'], $itemNews['text'], $itemNews['category'], $itemNews['date'], $itemNews['author']); 
  		?> 
		<article>
			<header><h3><i><?= $newItemNews->getTitleNews(); ?></i></h3></header>
			<p><?= $newItemNews->getTextNews(); ?></p>
			<p><strong>Время: </strong><?= $newItemNews->getDateNews(); ?><strong> Автор статьи:</strong> <?= $newItemNews->getAuthorNews();?></p>
			<hr>
		</article>
		<?php }?>
	</section>

</body>
