
//select
function populate(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	s2.innerHTML = "";
	
	if(s1.value == "COMILLA"){
		var optionArray = ["bamaro|Barura","chandina|Chandina","chandpur|Chandpur","debidwar|Debidwar","homna|Homna","laksham|Laksham","lalmai|Lalmai","muradnagar|Muradnagar","titas|Titas"];
	} 
	else if(s1.value == "DHAKA"){
		var optionArray = ["dhamrai|Dhamrai","dohar|Dohar","keraniganj|Keraniganj","nawabganj|Nawabganj","savar|Savar"];
	} 
	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
	
}
//DOB
$( function() {
	$( "#datepicker" ).datepicker({
			dateFormat: "dd/mm/yy",
			changeMonth: true,
			changeYear:true,
			yearRange: "1990:2010"
	});
  } );