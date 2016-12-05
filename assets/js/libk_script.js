
/*
 *	check email apakah sudah pernah terdaftar atau belum
 *	jika belum, rubah form login menjadi form register
 */
$( "#email" ).change(function() {
	$.get( "checkemail/" + encodeURIComponent($("#email").val()), function( data ) {
  		if(data != "0") {
        $("#warningemail").text("Email sudah pernah didaftarkan");  
        $("#warningemail").show();
        $(":submit").attr("disabled", true);  
      } else {
        $("#warningemail").hide();
        $(":submit").removeAttr("disabled");  
      }
	});
	$("#nama_depan").focus();
});

/*
 *	proses konfirmasi password
 *	membandingkan password dengan password2
 */
$("#password2").keyup( function () {
	var password = $("#password").val();
	var password2 = $("#password2").val();
     
    if( password2 != "" && password == password2) {
  		$("#warningpass").hide();
   		$(":submit").removeAttr("disabled");	
    }
    else {
      $("#warningpass").text("Konfirmasi password tidak sama");  
  		$("#warningpass").show();
   		$(":submit").attr("disabled", true);	
    }
    
});
