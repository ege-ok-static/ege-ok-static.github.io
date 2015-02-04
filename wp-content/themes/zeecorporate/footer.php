		</div>
		<div class="clear"></div>
		
		<div id="footer">
			<?php 
				$options = get_option('themezee_options');
				if ( isset($options['themeZee_footer']) and $options['themeZee_footer'] <> "" ) { 
					echo  esc_attr($options['themeZee_footer']); } 
			?>
			
			<div class="clear"></div>
		</div>
	</div>
	<?php wp_footer(); ?>
<!-- Yandex.Metrika counter -->
<script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript"></script>
<script type="text/javascript">
try { var yaCounter91997 = new Ya.Metrika({id:91997,
          webvisor:true,
          clickmap:true,
          accurateTrackBounce:true,type:1});
} catch(e) { }
</script>
<noscript><div><img src="//mc.yandex.ru/watch/91997?cnt-class=1" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>


<script>// <![CDATA[
$(".closed").toggleClass("show");
 
$(".title").click(function(){
 $(this).parent().toggleClass("show").children("div.contents").slideToggle("medium");
 if ($(this).parent().hasClass("show"))
     $(this).children(".title_h3").css("background","#bbbbbb");
 else $(this).children(".title_h3").css("background","#dddddd");
});
// ]]></script>

</body>

</html>