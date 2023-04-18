<!-- Stänger alla divvar och main        -->
			</div>
		</div>
	</section>
</main>

<!-- Footer är delad inom 3 widgetar som kan redigeras ifrån admin-panelen. -->

		<footer id="footer">
			<div class="container">
				<div class="row top">
					<div class="col-xs-12 col-sm-6 col-md-4">
					<?php dynamic_sidebar('footer1'); ?>
					</div> 

					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
					<?php dynamic_sidebar('footer2'); ?>
					</div>

					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
					<?php dynamic_sidebar('footer3'); ?>
					</div>
				</div>

<!-- Copyright som just nu är hardkodad men lätt att göra dynamisk -->
				<div class="row bottom">
					<div class="col-xs-12">
						<p>Copyright &copy; Grupp X, 2023</p>
					</div>

<!-- Stänger resterande divvar					 -->
			</div>
		</div>
	</footer>
</div>

<!-- Koppling till js och jquery -->
<?php wp_footer() ?>

</body>
</html>