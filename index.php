<?php
/**
 * 简单的响应式模板
 * 
 * @package Simplicity
 * @author Canghai
 * @version 1.3
 * @link https://github.com/xiaoliuxing520/Simplicity.git
 */
 $this->need('header.php');
 ?>
<div class="col-8" id="main">
	<div class="res-cons">
		<?php while($this->next()): ?>
			<article class="post">
				<header>
					<h2 class="post-title">
						<a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
					</h2>
				</header>
				<date class="post-meta">
					<?php $this->date('F j, Y'); ?>
				</date>
				<div class="post-content">
					<?php $this->content('阅读剩余部分 -'); ?>
				</div>
			</article>
		<?php endwhile; ?>
		<?php $this->pageNav('&laquo; Previous','Next &raquo;',10,'...');?>
	</div>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
