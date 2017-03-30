function chek() {
		$(document).ready (function(){
			$("#login").bind("blur", function (){
				$.ajax ({
					url: "../Model/chek.php",
					type: "POST",
					data: ({login: $("#login").val()}),
					dataType: "html",
					success: function (data){
						if(data == "fail")
							$("#zanyat").text("Данное имя пользователя занято");
					}
				});
			});
		});
}