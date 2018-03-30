var firstPreviousOption = null;
var secondPreviousOption = null;
var thirdPreviousOption = null;
var firstPreference = "FirstPreference";
var secondPreference = "SecondPreference";
var thirdPreference = "ThirdPreference";
var firstDescription = "FirstDescription";
var secondDescription = "SecondDescription";
var thirdDescription = "ThirdDescription";

function changeDescription(dropdown){
	var optionSelectedIndex = dropdown.selectedIndex;
	var selectedOption = dropdown.options[optionSelectedIndex].value;
	var descriptionPosition = selectedOption[0];
	var descriptionClassName = selectedOption.substring(2);
	if(descriptionPosition === "F"){
		hideDescription(firstDescription);
		enableOptions(firstPreviousOption, secondPreference, thirdPreference);
		disableOptions(descriptionClassName, secondPreference, thirdPreference);
		showDescription(firstDescription, descriptionClassName, selectedOption);
		firstPreviousOption = descriptionClassName;
	}
	else if(descriptionPosition === "S"){
		hideDescription(secondDescription);
		enableOptions(firstPreviousOption, firstPreference, thirdPreference);
		disableOptions(descriptionClassName, firstPreference, thirdPreference);
		showDescription(secondDescription, descriptionClassName, selectedOption);
		secondPreviousOption = descriptionClassName;
	}
	else if(descriptionPosition === "T"){
		hideDescription(thirdDescription);
		enableOptions(firstPreviousOption, firstPreference, secondPreference);
		disableOptions(descriptionClassName, firstPreference, secondPreference);
		showDescription(thirdDescription, descriptionClassName, selectedOption);
		thirdPreviousOption = descriptionClassName;
	}
}

function showDescription(descriptionId, descriptionClass, selectedOption){
	var descriptionDiv = document.getElementById(descriptionId);
	var displayedDescription = null;
	for(var i = 0; i < descriptionDiv.children.length; i++){
		if(descriptionDiv.children[i].className === "hidden " + descriptionClass){
			displayedDescription = descriptionDiv.children[i];
			break;
		}
	}
	displayedDescription.className = "unhidden " + selectedOption.substring(2);
}

function hideDescription(descriptionId){
	var descriptionDiv = document.getElementById(descriptionId);
	var displayedDescription = null;
	var descriptionOption = null;
	for(var i = 0; i < descriptionDiv.children.length; i++){
		 descriptionOption = descriptionDiv.children[i].className;
		 if(descriptionOption.substring(0,1) === "u"){
		 	descriptionDiv.children[i].className = descriptionOption.substring(2);
		 	break;
		 }
	}

}

function enableOptions(descriptionClass, preferenceId1, preferenceId2){
	console.log(descriptionClass);
	var dropdown1 = document.getElementById(preferenceId1);
	var dropdown2 = document.getElementById(preferenceId2);
	for(var i = 0; i < dropdown1.children.length; i++){
		if(descriptionClass === dropdown1.options[i].value.substring(2)){
			dropdown1.options[i].disabled = false;
			dropdown2.options[i].disabled = false;
			break;
		}
	}
}

function disableOptions(descriptionClass, preferenceId1, preferenceId2){
	var dropdown1 = document.getElementById(preferenceId1);
	var dropdown2 = document.getElementById(preferenceId2);
	for(var i = 0; i < dropdown1.children.length; i++){
		if(descriptionClass === dropdown1.options[i].value.substring(2)){
			dropdown1.options[i].disabled = true;
			dropdown2.options[i].disabled = true;
			break;
		}
	}
}

