<br/>
<?foreach($categories as $cat):?>
    <?=html::anchor('catalog/cat/c'. $cat->id . '', "<h4>$cat->title</h4>")?><br/>
<?endforeach?>
