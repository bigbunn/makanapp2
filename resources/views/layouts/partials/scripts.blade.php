@vite(["resources/js/app.js"])

<script src="{{ asset('/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('/vendors/tinymce/tinymce.min.js') }}"></script>


<script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>

@livewireScripts
<script src="{{ asset('/js/main.js') }}"></script>
<script src="{{ asset('/js/pages/filepond.js') }}"></script>
<script src="{{ asset('/js/extensions/toastify.js') }}"></script>
{{ $script ?? ''}}