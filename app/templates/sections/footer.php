</div>
<div id="source-modal" class="modal fade">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Source Code</h4>
			</div>
			<div class="modal-body">
				<pre></pre>
			</div>
		</div>
	</div>
</div>
<footer>
	<div class="row">
		<div class="col-lg-12">
			<ul class="list-unstyled">
				<li class="pull-right"><a href="#top">Back to top</a></li>
			</ul>
			<p>Made by <a href="#" rel="nofollow">Akumetsu</a>. Contact me at <a
					href="#"><span
						class="__cf_email__" data-cfemail="">[email&#160;protected]</span>
				</a>.
			</p>

			<p>Based on <a href="http://getbootstrap.com" rel="nofollow">Bootstrap</a>. Icons from <a
					href="http://fortawesome.github.io/Font-Awesome/" rel="nofollow">Font Awesome</a>. Web fonts from <a
					href="http://www.google.com/webfonts" rel="nofollow">Google</a>.</p>
		</div>
	</div>
</footer>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/bootswatch.js"></script>
<script type="text/javascript">
	/* <![CDATA[ */
	(function () {
		try {
			var s, a, i, j, r, c, l = document.getElementsByTagName("a"), t = document.createElement("textarea");
			for (i = 0; l.length - i; i++) {
				try {
					a = l[i].getAttribute("href");
					if (a && a.indexOf("/cdn-cgi/l/email-protection") > -1 && (a.length > 28)) {
						s = '';
						j = 27 + 1 + a.indexOf("/cdn-cgi/l/email-protection");
						if (a.length > j) {
							r = parseInt(a.substr(j, 2), 16);
							for (j += 2; a.length > j && a.substr(j, 1) != 'X'; j += 2) {
								c = parseInt(a.substr(j, 2), 16) ^ r;
								s += String.fromCharCode(c);
							}
							j += 1;
							s += a.substr(j, a.length - j);
						}
						t.innerHTML = s.replace(/</g, "&lt;").replace(/>/g, "&gt;");
						l[i].setAttribute("href", "mailto:" + t.value);
					}
				} catch (e) {
				}
			}
		} catch (e) {
		}
	})();
	/* ]]> */
</script>
</body>
</html>
