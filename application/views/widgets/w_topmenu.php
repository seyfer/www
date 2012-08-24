<?foreach ($menu as $name => $menu):?>
<?if(in_array($select, $menu)):?>
<?=Html::anchor('page/'. $menu[0], $name, array('class' => 'select'))?>
<?else:?>
<?=Html::anchor('page/'. $menu[0], $name)?>
<?endif?>
<?endforeach?>
