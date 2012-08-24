<p>
Список всех заказов
</p>

<? foreach ($orders as $order) : ?>

<b>Номер заказа: <?=$order->id; ?></b>  
<br>
<p>
    Заказчик: <?=$users[$order->id]->username?>
</p>
<p>Товары:
    <? foreach ($products[$order->id] as $product) : ?>
        <?=$product->title; ?> - - Количество - <?=$orders_products[$order->id]['count']; ?> 
                    - Стоимость: <?=$product->cost; ?> - Стоимость всего - 
                    <?=$product->cost*$orders_products[$order->id]['count'] ?>
    <? endforeach; ?>
</p>
<p>
    Доставка: 
    <?=$delivery[$order->id]['name']; ?>  
                    - Стоимость: <?=$delivery[$order->id]['cost']; ?>
</p>
<p>Итого: <b><?=($delivery[$order->id]['cost']+$product->cost*$orders_products[$order->id]['count']);?></b></p>

<hr>
<? endforeach; ?>

<pre>
<? 

//var_dump($products[0]->title); 
//var_dump($delivery['name']); 
?>