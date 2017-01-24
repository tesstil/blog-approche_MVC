<?php include("app/view/layout/header.inc.php"); ?>

	<div>
		<h3>Derniers articles du blog</h3>
		<?php foreach($articles as $article) { ?>
			<p>
				<a href='?module=article&action=view&id=<?= $article['post_ID']; ?>'><?=$article['post_title']?>
				</a>
				<br />
				<?php echo $article['post_date']; ?>
				<br />
				<?php echo $article['contenu']; ?>
				...
			</p>
		<?php } ?>
	</div>

	<?php paginate($nb_articles, PAGINATION_ARTICLES, 'article', 'index'); ?>

<?php include("app/view/layout/footer.inc.php"); ?>