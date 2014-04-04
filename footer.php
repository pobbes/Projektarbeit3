<!-- BEGIN CORE FRAMEWORK JS -->
    <script src="theme/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
    <script src="theme/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
    <script src="theme/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="theme/plugins/breakpoints.js" type="text/javascript"></script>

    <script src="theme/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="theme/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script>
    <script src="theme/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>
    <script src="theme/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script> 
    <script src="theme/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
    <script src="theme/plugins/jquery-sparkline/jquery-sparkline.js"></script>

    <script src="theme/plugins/modernizr.js" type="text/javascript"></script>
    <script src="theme/plugins/pace/pace.min.js" type="text/javascript"></script> 
<!-- END CORE FRAMEWORK JS -->


<!--[if lt IE 9]>
    <script src="theme/plugins/excanvas.js"></script>
    <script src="theme/plugins/respond.js"></script>	
<![endif]--> 


<?php if ($page == 'index' || $page == 'charts'): ?>
<!-- BEGINN index OR charts JS -->
    <script src="theme/plugins/jquery-flot/jquery.flot.js"></script>
    <script src="theme/plugins/jquery-flot/jquery.flot.animator.min.js"></script>
    <script src="theme/plugins/jquery-ricksaw-chart/js/d3.v2.js"></script>
    <script src="theme/plugins/jquery-ricksaw-chart/js/rickshaw.min.js"></script>
    <script src="theme/plugins/jquery-morris-chart/js/morris.min.js"></script>
    <script src="theme/plugins/jquery-easy-pie-chart/js/jquery.easypiechart.min.js"></script>
<!-- END index OR charts JS -->
<?php endif; ?>

<?php if ($page == 'index'): ?>
<!-- BEGINN index JS -->
    <script src="theme/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="theme/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
    <script src="theme/plugins/jquery-jvectormap/js/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script> 
    <script src="theme/plugins/jquery-jvectormap/js/jquery-jvectormap-us-lcc-en.js" type="text/javascript"></script>
    <script src="theme/plugins/skycons/skycons.js"></script> 
    <script src="theme/js/dashboard.js" type="text/javascript"></script>
<!-- END index JS -->
<?php endif; ?>


<?php if ($page == 'charts'): ?>
<!-- BEGINN CHARTS JS -->
    
    <script src="theme/plugins/jquery-flot/jquery.flot.orderBars.js"></script>
    <script src="theme/plugins/jquery-flot/jquery.flot.selection.min.js"></script> 
    <script src="theme/plugins/jquery-flot/jquery.flot.time.min.js"></script> 
    <script src="theme/plugins/jquery-ricksaw-chart/js/raphael-min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script> 
<script src="theme/js/charts.js" type="text/javascript"></script>
<!-- END CHARTS JS -->
<?php endif; ?>


<?php if ($page == 'datatables' || $page == 'vector_map'): ?>
<!-- BEGINN datatables OR vector_map JS -->
    <script src="theme/plugins/jquery-jvectormap/js/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script> 
<!-- END datatables OR vector_map JS -->
<?php endif; ?>


<?php if ($page == 'datatables'): ?>
<!-- BEGINN datatables JS -->
    <script src="theme/js/datatables.js" type="text/javascript"></script>
    <script src="theme/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
    <script src="theme/plugins/jquery-datatable/extra/js/TableTools.min.js" type="text/javascript"></script> 
    <script src="theme/plugins/jquery-datatable/js/jquery.dataTables.min.js" type="text/javascript"></script> 
    <script type="text/javascript" src="theme/plugins/datatables-responsive/js/datatables.responsive.js"></script>
    <script type="text/javascript" src="theme/plugins/datatables-responsive/js/lodash.min.js"></script>
<!-- END datatables JS -->
<?php endif; ?>


<?php if ($page == 'form_validations'): ?>
<!-- BEGINN form_validations JS -->
    <script src="theme/plugins/jquery-autonumeric/autoNumeric.js" type="text/javascript"></script> 
    <script src="theme/js/form_elements.js" type="text/javascript"></script>
    <script src="theme/js/form_validations.js" type="text/javascript"></script>
    <script src="theme/plugins/boostrap-form-wizard/js/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
    <script src="theme/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js" type="text/javascript"></script>
    <script src="theme/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="theme/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
    <script src="theme/plugins/bootstrap-tag/bootstrap-tagsinput.min.js" type="text/javascript"></script>
    <script src="theme/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script> 
    <script src="theme/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
    <script src="theme/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script> 
    <script src="theme/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
    <script src="theme/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="theme/plugins/ios-switch/ios7-switch.js" type="text/javascript"></script>
    <script src="theme/plugins/dropzone/dropzone.min.js" type="text/javascript"></script>
    <script src="theme/plugins/jquery-inputmask/jquery.inputmask.min.js" type="text/javascript"></script> 
    <script src="theme/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<!-- END form_validations JS -->
<?php endif; ?>

<?php if ($page == 'group_list'): ?>
<!-- BEGINN group_list JS -->
    <script src="theme/js/group_list.js" type="text/javascript"></script>
    <script src="theme/plugins/jquery-nestable/jquery.nestable.js" type="text/javascript"></script> 
<!-- END group_list JS -->
<?php endif; ?>


<?php if ($page == 'icons'): ?>
<!-- BEGINN icons JS -->
    <script src="theme/js/icon.js" type="text/javascript"></script>
    <script src="theme/plugins/boostrap-slider/js/bootstrap-slider.js" type="text/javascript"></script>
<!-- END icons JS -->
<?php endif; ?>


<?php if ($page == 'messages_notifications'): ?>
<!-- BEGINN messages_notifications JS -->
    <script src="theme/js/messages_notifications.js" type="text/javascript"></script>
<!-- END messages_notifications JS -->
<?php endif; ?>


<?php if ($page == 'tabs_accordian'): ?>
<!-- BEGINN tabs_accordian JS -->
    <script src="theme/js/tabs_accordian.js" type="text/javascript"></script>
<!-- END tabs_accordian JS -->
<?php endif; ?>


<?php if ($page == 'vector_map'): ?>
<!-- BEGINN vector_map JS -->
    <script src="theme/js/vector_maps.js" type="text/javascript"></script>
    <script src="theme/plugins/jquery-jvectormap/js/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
<!-- END vector_map JS -->
<?php endif; ?>


<?php if ($page == 'sliders'): ?>
<!-- BEGINN sliders JS -->
    <script src="theme/plugins/boostrap-slider/js/bootstrap-slider.js" type="text/javascript"></script>
<!-- END sliders JS -->
<?php endif; ?>


<!-- BEGIN CORE TEMPLATE JS -->
    <script src="theme/js/core.js" type="text/javascript"></script>
    <script src="theme/js/demo.js" type="text/javascript"></script>
<!-- END CORE TEMPLATE JS -->

</div></body>
