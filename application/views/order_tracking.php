<div>Courier: <?= $order->courier; ?></div>
<div>AWB: <?= $order->shipping_courier_tracking_id; ?></div>
<div>Booking ID: <?= $order->number; ?></div>

<div class="history-container margin-top-7-5px">
	<? foreach ($arr_history as $key => $history): ?>
    	<div class="list <? if ($key <= 0): ?>active<? endif; ?>">
    		<div class="font-semibold font-14"><?= $history->rowstate_name; ?></div>
    		<div class="color-bbb"><?= $history->create_date; ?></div>
    		<div class=""><?= $history->description; ?></div>
    	</div>
    <? endforeach; ?>
</div>