<div class="game-box">
	<h1>{$game.name}</h1>
	<div class="img-price-developer-box clearfix">
			<div class="game-img"><img src="{$game.image}"></div>
			<div class="price-developer-add">
				<div class="price">Price: {$game.price}</div>
				<div class="developer">Developer: {$game.developer}</div>
				<div class="btn-preloader clearfix">
					<div onclick="addToCart({$game.id})" class="btn-add">Add To Cart</div>
					<div class="preloader"></div>
				</div>
			</div>
	</div>
	<div class="overview"><p>{$game.overview}</p></div>
</div>
