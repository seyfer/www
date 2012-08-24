<h2>Каталог</h2>
<div class="menu_links">
<?foreach($categories as $cat):?>
<?if($select == $cat->id):?>
<?=html::anchor('catalog/cat/c' . $cat->id, $cat->title, array('class' => 'select'))?>
<?else:?>
<?=html::anchor('catalog/cat/c' . $cat->id, $cat->title)?>
<?endif?>
<?endforeach?>
</div>