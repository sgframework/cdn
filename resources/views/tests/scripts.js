<script>

function populatebranchnumber() {

	$.getJSON('', {branchname: $('#branchname').val()}, function (data) {

		var select = $('#branchnumber');
		var options = select.prop('options');
		$('option', select).remove();

		$.each(data, function (index, array) {
			options[options.length] = new Option(array['branchnumber']);
		});

	});

}

populatebranchnumber();
$('#branchname').change(function () {
	populatebranchnumber();
});

</script>