<footer>

	<h2><i>Napísali o mne</i></h2>

	<div class="all-comments">

		<?php foreach ( $all_comments as $dude ) : ?>

			<div class="comments">

				<img src="<?php echo $dude['image'] ?>" alt="">

				<div class="five-stars">
					<i class="fa-solid fa-star fa-lg"></i><i class="fa-solid fa-star fa-lg"></i><i class="fa-solid fa-star fa-lg"></i><i class="fa-solid fa-star fa-lg"></i><i class="fa-solid fa-star fa-lg"></i>
				</div>

				<h4><?php echo $dude['name'] ?></h4>
				<p><?php echo $dude['comment'] ?></p>

			</div>

		<?php endforeach ?>

	</div>

	<div class="last-footer">

		<p>&copy; 2023 | Marek Miklúšek |<a href="https://github.com/Marek-Miklusek"><i class="fa-brands fa-github"></i></a></p>

		<p>Design straight stolen from <a href="https://afinitybeauty.sk/" class="stolen">www.afinitybeauty.sk</a></p>

		<p>
			<a href="https://www.facebook.com/salonmatreshka" title="Facebook"><i class="fa-brands fa-facebook"></i></a>
			<a href="https://www.instagram.com/viktoria_bochinche/" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
		</p>

	</div>

</footer>

</body>
</html>