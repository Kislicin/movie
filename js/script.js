//������� �������� ������������� ����� � ������������ ����
function thisform(form){
	if(form.email.value == ""){
		alert('�� �� ����� email');
		return false;
	}
	else {
		var email = form.email.value;
		var regV = /[a-z0-9-_]{2,1000}\@[a-z0-9\-\_]{2,100}\.[a-z0-9]{2,4}/gi;
		var result = email.match(regV);
		if(!result){
			alert ('������� ���������� email');
			return false;
		}
		if(form.name.value == ""){
		alert ('�� �� ����� ���');
		return false;
	    }
	   if(form.password.value == ""){
	    alert ('������� ������');
		return false;
	}
	   if(form.repassword.value == ""){
	    alert ('��������� ������');
		return false;
	}
	  if(form.password.value != form.repassword.value){
	     alert ('������ �� ���������');
		 return false;
	  } 
	
 
}
}