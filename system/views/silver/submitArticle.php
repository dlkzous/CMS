<form action="<?=BASE_URL?>user/login" method="post">
	<input type="hidden" value="true" name="submit_check"><br/>
	Article Title : <input type="text" name="title"><br/>
	Article Category : <input type="text" name="category" id="category"><br/>
	Article Content : <br/>
	<div>
		<textarea id="elm1" name="elm1" rows="15" cols="80" style="width: 80%">
			&lt;p&gt;
				This is some example text that you can edit inside the &lt;strong&gt;TinyMCE editor&lt;/strong&gt;.
			&lt;/p&gt;
			&lt;p&gt;
			Nam nisi elit, cursus in rhoncus sit amet, pulvinar laoreet leo. Nam sed lectus quam, ut sagittis tellus. Quisque dignissim mauris a augue rutrum tempor. Donec vitae purus nec massa vestibulum ornare sit amet id tellus. Nunc quam mauris, fermentum nec lacinia eget, sollicitudin nec ante. Aliquam molestie volutpat dapibus. Nunc interdum viverra sodales. Morbi laoreet pulvinar gravida. Quisque ut turpis sagittis nunc accumsan vehicula. Duis elementum congue ultrices. Cras faucibus feugiat arcu quis lacinia. In hac habitasse platea dictumst. Pellentesque fermentum magna sit amet tellus varius ullamcorper. Vestibulum at urna augue, eget varius neque. Fusce facilisis venenatis dapibus. Integer non sem at arcu euismod tempor nec sed nisl. Morbi ultricies, mauris ut ultricies adipiscing, felis odio condimentum massa, et luctus est nunc nec eros.
			&lt;/p&gt;
		</textarea>
	</div>
	<input type="submit">
</form>
