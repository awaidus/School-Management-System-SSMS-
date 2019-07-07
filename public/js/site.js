$('.date').datetimepicker({
    formatDate: 'Y-m-d',
    format: 'Y-m-d',
    closeOnDateSelect: true,
    todayButton: true,
    timepicker: false,

});

$('.time').datetimepicker({
    format: 'H:i:s',
    closeOnDateSelect: true,
    todayButton: true,
    datepicker: false,
    step: 10,

});
