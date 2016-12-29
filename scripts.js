function outputUpdate(vol) 
{    
	document.querySelector('#volume').value = vol;
}
function disablefirstbutton() {
    document.getElementById("b1").disabled = true;
    document.getElementById("b2").disabled = false;
}

function disablesecondbutton() {
    document.getElementById("b2").disabled = true;
    document.getElementById("b1").disabled = false;
}