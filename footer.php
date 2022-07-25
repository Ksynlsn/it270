<footer>

<div class="inner-footer">
	<h2>Tours of the Month</h2>

	<?php dynamic_sidebar('sidebar-footer') ;?>
	
</div>

<div class="inner-footer bottom">
	<ul>
		<li>Copyright &copy; <?php echo date('Y');?></li>
		<li>All Rights Reserved</li>
		<li><a href="">Web Design by Kacie</a></li>
		<li><a id="html-checker" href="#">HTML&nbsp;Validation</a></li>
		<li><a href="https://jigsaw.w3.org/css-validator/check?uri=referer">CSS&nbsp;Validation</a></li>
	</ul>
</div>

</footer>
<script>
		document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);  

		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});    
		});
		</script>
</body>
</html>
