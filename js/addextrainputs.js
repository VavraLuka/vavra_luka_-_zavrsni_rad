var form = document.getElementById("productForm");
var extraInputs = document.getElementById("extra-inputs");
var addExtraInputs = document.getElementById("add-extra-inputs");

var inputIndex = 1;
var maxInputs = 3;

addExtraInputs.onclick = function() {
  if (inputIndex <= maxInputs) {
    var newInputDiv = document.createElement("div");
    newInputDiv.className = "two-inputs";

    var newInputName = document.createElement("input");
    newInputName.type = "text";
    newInputName.name = "additionalLine" + inputIndex;
    newInputName.id = "additionalLine" + inputIndex;
    newInputName.placeholder = "Opis";

    var newInputValue = document.createElement("input");
    newInputValue.type = "text";
    newInputValue.name = "additionalLineValue" + inputIndex;
    newInputValue.id = "additionalLineValue" + inputIndex;
    newInputValue.placeholder = "Podatak";

    newInputDiv.appendChild(newInputName);
    newInputDiv.appendChild(newInputValue);
    extraInputs.appendChild(newInputDiv);

    inputIndex++;
  } else {
    addInputButton.disabled = true;
  }
};