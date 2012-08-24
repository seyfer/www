<h2>Меню</h2>
<div class="menu_links">
<?foreach ($menu as $name => $menu):?>
<?if(in_array($select, $menu)):?>
<?=Html::anchor('account/'. $menu[0], $name, array('class' => 'select'))?>
<?else:?>
<?=Html::anchor('account/'. $menu[0], $name)?>
<?endif?>
<?endforeach?>
<?=Html::anchor('logout', 'Выход')?>
</div>
