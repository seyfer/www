<?foreach ($menu as $name => $menu):?>
<?if(in_array($select, $menu)):?>
<?=Html::anchor('admin/'. $menu[0], $name, array('class' => 'select'))?>
<?else:?>
<?=Html::anchor('admin/'. $menu[0], $name)?>
<?endif?>
<?endforeach?>