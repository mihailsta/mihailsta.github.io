<section class="order">
  <div class="container">
    <h1 class="order-title">Заказ доставки</h1>
    <table class="order-list">
      <tr>
        <th>Фото</th>
        <th>Название товара</th>
        <th>Цена</th>
        <th>Стоимость доставки</th>
      </tr>
      <tr>
        <td><img src="<?= $img_url ?>" width="68" height="52" alt="<?= $title ?>"></td>
        <td><?= $title ?></td>
        <td><?= $final_price ?>₽</td>
        <td><span class="price"><?= $delivery_cost ?>₽</span></td>
      </tr>
    </table>
  </div>
</section>