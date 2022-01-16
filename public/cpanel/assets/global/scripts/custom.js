
$(document).ajaxStart(function(e) {
    showAjax();
//	showAjaxModal();
}).ajaxStop(function() {
    hideAjax();
//	hideAjaxModal()
});
        
function showAjax(){
    var el = $(".ajaxLoad");
    Metronic.blockUI({
        target: el,
        animate: true,
        overlayColor: '#000'
    });
}
function showAjaxModal(){
	var el2 = $(".ajaxLoaderModal");
    Metronic.blockUI({
        target: el2,
        animate: true,
        overlayColor: '#000'
    });
	$(".ajaxLoaderModal").removeClass('hide').addClass('show');
}
function hideAjax(){
    var el = $(".ajaxLoad");
    window.setTimeout(function() {
        Metronic.unblockUI(el);
    }, 100);
}

function hideAjaxModal(){
    var el = $(".ajaxLoaderModal");
    window.setTimeout(function() {
        Metronic.unblockUI(el);
    }, 100);
	$(".ajaxLoaderModal").removeClass('show').addClass('hide');
}

$("#closeAlert").click(function(){
    hideAlert();
});
function showAlert(msg, status) {
    var alert = $('#alert');
    alert.removeClass();
    alert.addClass("alert show alert-" + status);
    $(".alert-text").html(msg);
//    alert.show();
    $(".scroll-to-top").click();
}
function hideAlert(){
    var alert = $('#alert');
    alert.removeClass();
    alert.addClass("hide");
}

function showModal(title,btn_id ,url, data, width) {
    $('#modal-title').html(title);
    $('#modal-body').html("");
    $('#modal-body').load(url, data);
    var footer = "<button type='button' class='btn blue' id="+btn_id+">موافق</button>"
                +" <button type='button' class='btn red' data-dismiss='modal' id='modalCancel'>إلغاء</button>";
    $('#modal-footer').html(footer);
    $("#modal-dialog").removeClass();
    $("#modal-dialog").addClass('modal-dialog');
    $("#modal-dialog").addClass(width);
    $('#myModal').modal();
}

function showConfirm(title, btn_id ,msg, width) {
    $('#confirm-title').html(title);
    $('#confirm-body').html(msg);
    var footer = "<button type='button' class='btn green' id="+btn_id+">تأكيد</button>"
                +" <button type='button' class='btn red' data-dismiss='modal' id='confirmCancel'>إلغاء</button>";
    $('#confirm-footer').html(footer);
    $("#confirm-dialog").removeClass();
    $("#confirm-dialog").addClass('modal-dialog');
    $("#confirm-dialog").addClass(width);
    $('#myConfirm').modal();
}

function showInfo(title,url, data, width)  { // load info page
    $('#info-title').html(title);
    $('#info-body').html("");
    $('#info-body').load(url, data);
    $("#info-dialog").removeClass();
    $("#info-dialog").addClass('modal-dialog');
    $("#info-dialog").addClass(width);
    $('#myInfo').modal();
}
//showMsg("حدث خطأ","الرجاء إدخال رقم الهوية.","modal-20","danger");
function showMsg(title,msg,status,width){ // show message only
    
    $("#msg-dialog").removeClass();
    $("#msg-dialog").addClass('modal-dialog');
    $("#msg-dialog").addClass(width);
    if(status == "success")
        var iconClass = "fa fa-check font-green";
    else if(status == "danger")
        var iconClass = "fa fa-times font-red";
    var msgBtn = $("#msgCancelBtn");
    msgBtn.removeClass();
    msgBtn.addClass('btn btn-'+status);
    $('#msg-title').html(title);
    $('#msg-body').html("<i class='"+iconClass+"' style='font-size: 25px;'></i><span style='padding-bottom: 10px;'>"+msg + "</span>" );
    $('#MyMsg').modal();
}

function hideModal(){
    $("#modalCancel").click();
}
function hideConfirm(){
    $("#confirmCancel").click();
}
function hideInfo(){
    $("#infoCancel").click();
}
function hideMsg(){
    $("#msgCancel").click();
}
//$("#infoOk").click(function(){
//    hideInfo();
//});
var tableToExcel = (function() {
    var uri = 'data:application/vnd.ms-excel;base64,'
            , template = '<html dir="rtl" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
            , base64 = function(s) {
                return window.btoa(unescape(encodeURIComponent(s)))
            }
    , format = function(s, c) {
        return s.replace(/{(\w+)}/g, function(m, p) {
            return c[p];
        })
    }
    return function(table, name) {
        if (!table.nodeType)
            table = document.getElementById(table)
        var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
        window.location.href = uri + base64(format(template, ctx))
    }
})()
//$(".datatable").dataTable();
$(".datatable").dataTable({
    "bStateSave": false, // save datatable state(pagination, sort, etc) in cookie.
    "lengthMenu": [
        [10, 20, 30, -1],
        [10, 20, 30, "الجميع"] // change per page values here
    ],
    // set the initial value
    "pageLength": 10,
    "language": {
        "lengthMenu": "مشاهدة: _MENU_",
        "paging": {
            "previous": "Prev",
            "next": "Next"
        }
    },
    "columnDefs": [{  // set default column settings
        'orderable': false,
        'targets': [0]
    }, {
        "searchable": false,
        "targets": [0]
    }],
    "order": [
        [0, "asc"]
    ] // set first column as a default sort by asc
});
        
$(".select2").select2({
    placeholder: "الرجاء الاختيار",
    allowClear: true
});

$('.date').datepicker({
    'autoclose': true,
    format: 'yyyy/mm/dd',
//    todayHighlight: true,
//    todayBtn: true
});

$('.date-picker').datepicker({
    rtl: Metronic.isRTL(),
    autoclose: true,
    format: 'yyyy/mm/dd',
});

//$(".time").mask('00:00');
$(".time").focus(function() {
    $.validator.addMethod("time", function(value, element) {
        var result = this.optional(element) || /^([01]\d|2[0-3])(:[0-5]\d){1,2}$/.test(value);

        if (result == true) {

//                $(element).parent().removeClass('error');
            $(element).removeClass('error');
        }
        else {
//                $(element).parent().addClass('error');
            $(element).addClass('error');
        }
        return this.optional(element) || /^([01]\d|2[0-3])(:[0-5]\d){1,2}$/.test(value);
    }, "");
});

$('#resetBtn').click(function(e){
    $(".select2").select2("val", "");
    //$(".select2 option:first").val();
    $("#myForm").reset();            
});