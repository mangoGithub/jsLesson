function ajax(method, url, data, fn) {
	var xhr = null;

	if (window.XMLHttpRequest) {
		xhr = new XMLHttpRequest();
	} else {
		xhr = new ActiveXObject('Microsoft.XMLHTTP');
	}
	
	if (method == 'get' && data) {
		url += '?' + data;
	}
	
	xhr.open(method, url, true);
	if (method == 'get') {
		xhr.send();
	} else {
		xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		xhr.send(data);
	}
	
	xhr.onreadystatechange = function() {
		
		if (xhr.readyState == 4) {
			
			fn(xhr.responseText);
			
		}
		
	}
}