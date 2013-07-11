<div class="container">
<table class="table table-bordered table-striped table-hover">
	<tr>
		<td><h2><?=$post["post_subject"]?></h2></td>
	</tr>
	<tr>
		<td><?=$post["post_text"]?></td>
	</tr>
	<tr>
		<td style="height: 10px;">&nbsp;</td>
	</tr>
</table>
<span class="span6">
<h2>Kommentaarid</h2>
<table class="table">
	<? foreach ($comments as $comment) : ?>
		<tr>
			<td><?=$comment["username"]?><br><?=$comment["comment_time"]?></td>
			<td><?=$comment["comment_text"]?></td>
		</tr>
	<? endforeach ?>
</table>
</span>
</div>