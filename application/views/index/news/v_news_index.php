<br/>
<?foreach ($all_news as $news):?>
    <h3><?=HTML::anchor('news/get/' . $news->id, $news->title)?></h3>
    <div class="date"><?=$news->date?></div>
    <p>
    <?=$news->intro?>
    </p>
    <div class="block_bottom">
     
        <?=HTML::anchor('news/get/' . $news->id, 'Читать полностью...')?>
    </div>
   
<?endforeach?>
