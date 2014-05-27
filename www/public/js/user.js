function change_div(){
	var sel = document.getElementById('selectrole');
	if ($(sel).val() == "admin") {
            $("#admin").slideDown();
            $("#student").slideUp();
        }
        else if($(sel).val() =="student") {
            $("#student").slideDown();
            $("#admin").slideUp();
        }
}

/*
function put_role()
{
	var sel = document.getElementById('selectrole');
	$(sel).val();
}
*/
