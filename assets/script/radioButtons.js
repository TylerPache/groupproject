function checkIfRadioButtonSelected() {
    "use strict";
    var isChecked = false;
    var len = document.getElementsByName('fplace').length;
    var choices = new Array();
    for (var i = 0; i < len; i++) {
        if (document.getElementsByName('fplace')[i].checked) {
            choices.push(document.getElementsByName('fplace')[i].value);
        }
    } //end of for loop

    if (choices.length > 0) {
        isChecked = true;
        document.getElementsByTagName('fieldset')[0].style = null;
        document.getElementsByTagName('legend')[0].style = null;
    } else {
        document.getElementsByTagName('fieldset')[0].style.borderColor = 'red';
        document.getElementsByTagName('legend')[0].style.color = 'red';
    }

    return isChecked;

} //end of function checkIfRadioButtonSelected