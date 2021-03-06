(function( factory ) {
	if ( typeof define === "function" && define.amd ) {
		define( ["jquery", "../jquery.validate"], factory );
	} else {
		factory( jQuery );
	}
}(function( $ ) {

/*
 * Translated default messages for the jQuery validation plugin.
 * Locale: AR (Arabic; العربية)
 */
$.extend($.validator.messages, {
	required: "هذا الحقل إلزامي",
	remote: "يرجى تصحيح هذا الحقل للمتابعة",
	email: "يرجى إدخال بريد إلكتروني صحيح",
	url: "يرجى إدخال عنوان موقع إلكتروني صحيح",
	date: "يرجى إدخال تاريخ بشكل صحيح",
	dateISO: "رجاء إدخال تاريخ صحيح (ISO)",
	number: "يرجى إدخال عدد بطريقة صحيحة",
	digits: "يرجى إدخال أرقام فقط",
	creditcard: "يرجى إدخال رقم بطاقة ائتمان صحيح",
	equalTo: "يرجى إدخال نفس القيمة",
	extension: "يرجى إدخال ملف بامتداد موافق عليه",
	maxlength: $.validator.format("الحد الأقصى للعدد هو {0}"),
	minlength: $.validator.format("الحد الأدنى للعدد هو {0}"),
	rangelength: $.validator.format("عدد الحروف يجب أن يكون بين {0} و {1}"),
	range: $.validator.format("يرجى إدخال عدد قيمته بين {0} و {1}"),
	max: $.validator.format("يرجى إدخال عدد أقل من أو يساوي (0}"),
	min: $.validator.format("يرجى إدخال عدد أكبر من أو يساوي (0}")
});

}));