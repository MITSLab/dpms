<!-- jQuery  -->
<script src="{{asset('templates/horizontal/assets')}}/js/jquery.min.js"></script>
<script src="{{asset('templates/horizontal/assets')}}/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('templates/horizontal/assets')}}/js/waves.min.js"></script>
<script src="{{asset('templates/horizontal/assets')}}/js/jquery.slimscroll.min.js"></script>
<script src="{{asset('templates/horizontal/assets')}}/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="{{asset('templates/horizontal/assets')}}/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{asset('templates/horizontal/assets')}}/plugins/moment/moment.js"></script>
<script src="{{asset('templates/horizontal/assets')}}/plugins/apexcharts/apexcharts.min.js"></script>
<script src="{{asset('templates/apexcharts.com/samples/assets')}}/irregular-data-series.js"></script>
<script src="{{asset('templates/apexcharts.com/samples/assets')}}/series1000.js"></script>
<script src="{{asset('templates/apexcharts.com/samples/assets')}}/ohlc.js"></script>
<script src="{{asset('templates/horizontal/assets')}}/pages/jquery.dashboard.init.js"></script>
<!-- App js -->
<script src="{{asset('templates/horizontal/assets')}}/js/app.js"></script>
<script src="{{asset('templates/horizontal/assets')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('templates/horizontal/assets')}}/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="{{asset('templates/horizontal/assets')}}/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="{{asset('templates/horizontal/assets')}}/plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="{{asset('templates/horizontal/assets')}}/plugins/datatables/jszip.min.js"></script>
<script src="{{asset('templates/horizontal/assets')}}/plugins/datatables/pdfmake.min.js"></script>
<script src="{{asset('templates/horizontal/assets')}}/plugins/datatables/vfs_fonts.js"></script>
<script src="{{asset('templates/horizontal/assets')}}/plugins/datatables/buttons.html5.min.js"></script>
<script src="{{asset('templates/horizontal/assets')}}/plugins/datatables/buttons.print.min.js"></script>
<script src="{{asset('templates/horizontal/assets')}}/plugins/datatables/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="{{asset('templates/horizontal/assets')}}/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="{{asset('templates/horizontal/assets')}}/plugins/datatables/responsive.bootstrap4.min.js"></script>
<script src="{{asset('templates/horizontal/assets')}}/pages/jquery.datatable.init.js"></script>

<script src="{{ asset('js/validator.min.js') }}"></script>
<script src="{{ asset('js/toastr.min.js') }}"></script>

<script>
    $('.toast').toast({
        delay:2000,
        // Other options
    });
    toastr.options = {
    "closeButton": true,
    "progressBar": true,
    "positionClass": "toast-bottom-right",

    }
</script>
@stack('js')