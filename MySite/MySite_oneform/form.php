<?php

$form_field = '
	<form method="post"action="MySite.php">
		<input type="text" name="name"placeholder="What\'s your name?"/>
		<h2>Pick an Image</h2>
		<label for="fav_img4">
			<img src="https://latinospc.com/images/websites/webcontent/33.jpg"alt="image">
			</label>
			<label for="fav_img3">
				<img src="https://latinospc.com/images/websites/webcontent/44.jpg"alt="image">
				</label>
				<label for="fav_img2">
					<img src="https://latinospc.com/images/websites/webcontent/1010.jpg"alt="image">
					</label>
					<label for="fav_img1">
						<img src="https://latinospc.com/images/websites/webcontent/99.jpg"alt="image">
						</label>
						<input type="checkbox" id="fav_img1" name="fav_img1" value="99">
							<label for="fav_img1">One</label>
							<br>
								<input type="checkbox" id="fav_img2" name="fav_img2" value="44">
									<label for="fav_img2">Two</label>
									<br>
										<input type="checkbox" id="fav_img3" name="fav_img3" value="1010">
											<label for="fav_img3">Three</label>
											<br>
												<input type="checkbox" id="fav_img4" name="fav_img4" value="33">
													<label for="fav_img4">Four</label><br />
		<h2 style="text-align:center;"><input type="submit" value="send"/></h2>
	</form>';

$images = array("fav_img1", "fav_img2", "fav_img3", "fav_img4");
