var form = document.getElementById("productForm");
var extraInputs = document.getElementById("extra-inputs");
var addExtraInputs = document.getElementById("add-extra-inputs");
var breakLine = document.getElementById("break-line");

var inputIndex = 1;
var maxInputs = 3;

addExtraInputs.onclick = function () {
  if (inputIndex <= maxInputs) {
    var newInputDiv = document.createElement("div");
    newInputDiv.className = "two-inputs";

    var newInputName = document.createElement("input");
    newInputName.type = "text";
    newInputName.name = "additionalLine" + inputIndex;
    newInputName.id = "additionalLine" + inputIndex;
    newInputName.placeholder = "Opis";
    newInputName.maxlength = "30";

    var newInputValue = document.createElement("input");
    newInputValue.type = "text";
    newInputValue.name = "additionalLineValue" + inputIndex;
    newInputValue.id = "additionalLineValue" + inputIndex;
    newInputValue.placeholder = "Podatak";
    newInputValue.maxlength = "200";

    var removeIcon = document.createElement("img");
    removeIcon.className = "remove-icon";
    removeIcon.src = "images/removeIcon.svg";
    removeIcon.onclick = function () {
      newInputDiv.remove();
      inputIndex--;
      addExtraInputs.disabled = false;
      addExtraInputs.style.display = "block";
      breakLine.style.display = "none";
    };

    newInputDiv.appendChild(newInputName);
    newInputDiv.appendChild(newInputValue);
    newInputDiv.appendChild(removeIcon);
    extraInputs.appendChild(newInputDiv);

    inputIndex++;

    if (inputIndex > maxInputs) {
      addExtraInputs.disabled = true;
      addExtraInputs.style.display = "none";
      breakLine.style.display = "block";
    }
  }
};