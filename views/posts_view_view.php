<script type="text/javascript" src="<?=ASSETS_URL?>js\vendor\bootstrap.js"></script>
<script type="text/javascript" src="<?=ASSETS_URL?>js\vendor\bootstrap-prompts-alert.js"></script>
<script type="text/javascript">
function check(){
	if(!$('#comment_text').val()){
		alert('Sisesta tekst palun');
		return false;
	}
}</script>
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
			<td><?=$comment["comment_author"]?><br><?=$comment["comment_time"]?></td>
			<td><?=$comment["comment_time"]?></td>
			<td><?=$comment['comment_text']?></td>
		</tr>
	<? endforeach ?>
</table>
	<form method="post">
		<input type="text" name="comment_author" placeholder="Nimi"/><br/>
		<textarea name="comment_text" id="comment_text" cols="30" rows="10" placeholder="Kommentaar..."></textarea><br/>
		<button type="submit" onclick="return check()">Submit
	</form>
</span>
</div>