<h1>GAMES</h1>
<ul class="games-grid">		
	{foreach from=$games item=game}
		<li class="clearfix">
			<div class="image"><img src="{$game.image}"></div> 
			<div class="name-price-developer-box">
				<div class="name-price-box clearfix">
					<div class="name"><a href="/games?id={$game.id}">{$game.name}</a></div>
					<div class="price">
						{$game.price}
					</div>
				</div>
					<div class="developer">
						<span class="dev">{$game.developer}</span>
					</div>
			</div>

		</li>	
	{/foreach}
</ul>		
