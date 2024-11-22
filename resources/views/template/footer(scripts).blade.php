	<!-- Plugin scripts -->
	<script src="{{ asset('vendors/bundle.js') }}"></script>

	<!-- Chartjs -->
	<script src="{{ asset('vendors/charts/chartjs/chart.min.js') }}"></script>

	<!-- Circle progress -->
	<script src="{{ asset('vendors/circle-progress/circle-progress.min.js') }}"></script>

	<!-- Peity -->
	<script src="{{ asset('vendors/charts/peity/jquery.peity.min.js') }}"></script>
	<script src="{{ asset('assets/js/examples/charts/peity.js') }}"></script>

	<!-- Datepicker -->
	<script src="{{ asset('vendors/datepicker/daterangepicker.js') }}"></script>

	<!-- Slick -->
	<script src="{{ asset('vendors/slick/slick.min.js') }}"></script>

	<!-- Fileinput -->
	<script src="{{ asset('assets/js/fileinput.min.js') }}"></script>
	<script src="{{ asset('assets/js/fileinput.min.js') }}"></script>
	<script src="{{ asset('assets/js/fileinput.min.js') }}"></script>

	<script>
		$(document).ready(function () {
			$("#folder_upload_fa").fileinput({
				language: 'fa',
				browseLabel: 'آپلود فولدر',
				previewFileIcon: '<i class="fa fa-file text-primary"></i>',
				previewFileIconSettings: {
					'doc': '<i class="fas fa-file-word text-primary"></i>',
					'doc': '<i class="fas fa-file-word text-primary"></i>',
					'xls': '<i class="fas fa-file-excel text-success"></i>',
					'ppt': '<i class="fas fa-file-powerpoint text-danger"></i>',
					'jpg': '<i class="fas fa-file-image text-warning"></i>',
					'pdf': '<i class="fas fa-file-pdf text-danger"></i>',
					'zip': '<i class="fas fa-file-archive text-muted"></i>',
					'htm': '<i class="fas fa-file-code text-info"></i>',
					'html': '<i class="fas fa-file-code text-info"></i>',
					'css': '<i class="fas fa-file-code text-info"></i>',
					'js': '<i class="fas fa-file-code text-info"></i>',
					'txt': '<i class="fas fa-file-alt text-info"></i>',
					'mov': '<i class="fas fa-file-video text-warning"></i>',
					'mp3': '<i class="fas fa-file-audio text-warning"></i>',
				},
				uploadUrl: "/file-upload-batch/",
			});
			$("#file_upload_fa").fileinput({
				language: 'fa',
				browseLabel: 'آپلود فایل',
				previewFileIcon: '<i class="fa fa-file text-primary"></i>',
				previewFileIconSettings: {
					'doc': '<i class="fas fa-file-word text-primary"></i>',
					'doc': '<i class="fas fa-file-word text-primary"></i>',
					'xls': '<i class="fas fa-file-excel text-success"></i>',
					'ppt': '<i class="fas fa-file-powerpoint text-danger"></i>',
					'jpg': '<i class="fas fa-file-image text-warning"></i>',
					'pdf': '<i class="fas fa-file-pdf text-danger"></i>',
					'zip': '<i class="fas fa-file-archive text-muted"></i>',
					'htm': '<i class="fas fa-file-code text-info"></i>',
					'html': '<i class="fas fa-file-code text-info"></i>',
					'css': '<i class="fas fa-file-code text-info"></i>',
					'js': '<i class="fas fa-file-code text-info"></i>',
					'txt': '<i class="fas fa-file-alt text-info"></i>',
					'mov': '<i class="fas fa-file-video text-warning"></i>',
					'mp3': '<i class="fas fa-file-audio text-warning"></i>',
				},
				uploadUrl: "/file-upload-batch/",
			});
			$('.file-zoom-dialog').on('hidden.bs.modal', function (e) {
				$('body').addClass('modal-open');
				$('.modal-fileupload').removeClass('deactive');
			});
			$('.file-zoom-dialog').on('shown.bs.modal', function (e) {
				$('.modal-fileupload').addClass('deactive');
			})
		});
	</script>

	<!-- Vamp -->
	<script src="{{ asset('vendors/vmap/jquery.vmap.min.js') }}"></script>
	<script src="{{ asset('vendors/vmap/maps/jquery.vmap.usa.js') }}"></script>
	<script src="{{ asset('assets/js/examples/vmap.js') }}"></script>

	<!-- Dashboard scripts -->
	<script src="{{ asset('assets/js/examples/dashboard.js') }}"></script>
	<div class="colors">
		<!-- To use theme colors with Javascript -->
		<div class="bg-primary"></div>
		<div class="bg-primary-bright"></div>
		<div class="bg-secondary"></div>
		<div class="bg-secondary-bright"></div>
		<div class="bg-info"></div>
		<div class="bg-info-bright"></div>
		<div class="bg-success"></div>
		<div class="bg-success-bright"></div>
		<div class="bg-danger"></div>
		<div class="bg-danger-bright"></div>
		<div class="bg-warning"></div>
		<div class="bg-warning-bright"></div>
	</div>

	<!-- App scripts -->
	<script src="{{ asset('assets/js/app.js') }}"></script>