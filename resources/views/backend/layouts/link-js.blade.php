
<!-- Bootstrap JS -->
<script src="{{asset('backend')}}/assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="{{asset('backend')}}/assets/js/jquery.min.js"></script>
<script src="{{asset('backend')}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="{{asset('backend')}}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="{{asset('backend')}}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="{{asset('backend')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="{{asset('backend')}}/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{asset('backend')}}/assets/plugins/chartjs/js/Chart.min.js"></script>
<script src="{{asset('backend')}}/assets/plugins/chartjs/js/Chart.extension.js"></script>
{{--<script src="{{asset('backend')}}/assets/js/index.js"></script>--}}
<!--app JS-->
<script src="{{asset('backend')}}/assets/js/app.js"></script>


<script src="{{asset('backend')}}/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="{{asset('backend')}}/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
        var table = $('#example2').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf', 'print']
        });

        table.buttons().container()
            .appendTo('#example2_wrapper .col-md-6:eq(0)');
    });
</script>


<!-- No image -->
<script src="{{asset('backend')}}/plugins/noimage/no-image.js"></script>

<!--Product Default image one -->
<script>
    $(document).ready(function () {
        $('#defaultImage').change(function (e) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#showDefaultImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>


<!-- Toastr -->
<script src="{{asset('backend')}}/plugins/toastr/toastr.min.js"></script>
<script>
    @if(Session::has('message'))
    var type = "{{Session::get('alert-type','info')}}"

    switch (type) {
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif
</script>
<!-- Toastr -->

{{--//uses--}}
{{--$notification  = [--}}
{{--'alert-type' => 'success',--}}
{{--'message' =>   'Successfully create new fish .',--}}
{{--];--}}
{{--return redirect()->route('fish.lists')->with($notification);--}}




<!-- Summernote -->
<script src="{{asset('backend')}}/plugins/summernote/summernote-bs4.min.js"></script>

<script>
    $(document).ready(function () {
        $('.summernote').summernote();
    });
</script>


<!-- Sweetalert -->
<script src="{{asset('backend')}}/plugins/sweetalert/sweetalert2@9.js"></script>
<script src="{{asset('backend')}}/plugins/sweetalert/sweetalertjs.js"></script>


<script src="{{ asset('backend') }}/assets/plugins/select2/js/select2.min.js"></script>
<script>
    $('.single-select').select2({
        theme: 'bootstrap4',
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
        allowClear: Boolean($(this).data('allow-clear')),
    });
    $('.multiple-select').select2({
        theme: 'bootstrap4',
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
        allowClear: Boolean($(this).data('allow-clear')),
    });
</script>

