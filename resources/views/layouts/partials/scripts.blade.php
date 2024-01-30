@vite(["resources/js/app.js","resources/js/dark.js","resources/static/js/components/dark.js"])
@vite(["resources/js/pages/filepond.js","resources/js/sidebar.js"])

<script src="{{ asset('/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('/vendors/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('/vendors/simple-datatable/simple-datatable.js') }}"></script>


<script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>




@livewireScripts
<script src="{{ asset('/js/main.js') }}"></script>
<script src="{{ asset('/js/pages/filepond.js') }}"></script>
<script src="{{ asset('/js/extensions/toastify.js') }}"></script>

<script>
    $( ".date" ).flatpickr({
   dateFormat:"mm/dd/yyyy",
   disableMobile: "true",
   defaultDate: [new Date(), "2016-10-30"]
    });
</script>

{{ $script ?? ''}}