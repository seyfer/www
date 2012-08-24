<h2>Новости</h2>
<?foreach($all_news as $news):?>
    <br/>
    <h3><?=HTML::anchor('news/get/' . $news->id, $news->title)?></h3>
    <div class="date"><?=$news->date?></div>
    <p><?=$news->intro?></p>
<?endforeach?>
<?=HTML::anchor('news/', 'Все новости...')?>