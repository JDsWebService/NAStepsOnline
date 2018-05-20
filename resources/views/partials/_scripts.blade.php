<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

{{-- Tiny MCE --}}
<script src="/js/tinymce/tinymce.min.js"></script>
<script>
	tinymce.init({
		selector:'textarea',
		plugins: 'link',
		menubar: false,
		branding: false,
		resize: false,
		statusbar: false,
		force_br_newlines : false,
		force_p_newlines : false,
		forced_root_block : '',
		toolbar: 	['undo redo | cut copy paste | removeformat',
					'bold italic underline | link | outdent indent | alignleft aligncenter alignright alignjustify alignnone',],
	});
</script>