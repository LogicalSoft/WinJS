<div class="subtitle">AJAX</div>
<div class="parrafo">
	<div>AJAX LOAD</div>
	<div>
		<pre><code class="html" id="api1">
			<?php
$c ='
<div id="div-load"></div>
<script>
	$W.Load({
		idApply : "div-load",
		url     : "php/modulos/file.php",
		params  : {}
	})
</script>';
				echo htmlentities($c);
			?>
		</code></pre>
	</div>
</div>

<div class="parrafo">
	<div style="margin-top: 15px;">AJAX REQUEST</div>
	<div>
		<pre><code class="html" id="api2">
			<?php
$c ='
<script>
	$W.Ajax({
		url    : url,
		params : {},
		success : function(result,xhr){
			json = JSON.parse(result.responseText)
		},
		failure : function(xhr){  console.log "fail" }
	})
</script>';
				echo htmlentities($c);
			?>
		</code></pre>
	</div>
</div>
<script>
	hljs.highlightBlock(document.querySelector('#api1'));
	hljs.highlightBlock(document.querySelector('#api2'));
</script>