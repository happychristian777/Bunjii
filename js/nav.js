function run_first() {
	if(sessionStorage.item_id) {
		document.getElementById(sessionStorage.item_id.toString()).style.backgroundColor = "rgba(19,29,108,1.00)";
	}
	else {
		document.getElementById("0").style.backgroundColor = "rgba(19,29,108,1.00)";
	}
}
	
function nav_item_selected(item_id) {
	for(i = 0; i < 6; i++) {
		document.getElementById(i.toString()).style.backgroundColor = "";
	}
	document.getElementById(item_id.toString()).style.backgroundColor = "rgba(19,29,108,1.00)";
		
	//store item_id in sessionStorage
	sessionStorage.item_id = item_id;		
}
