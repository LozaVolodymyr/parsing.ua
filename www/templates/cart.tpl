<h1>CART ({$total})</h1>
{foreach from=$products item=product}
	<div class="cart-game-box">
		<h2><a href="/games?id={$product.id}">{$product.name}</a></h2>
		<h3>{$product.price}</h3>
	</div>
{/foreach}