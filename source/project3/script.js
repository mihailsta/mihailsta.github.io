let keyDisplay = document.querySelector('.display');
let keyButtons = document.querySelectorAll('.key');
let clearButton = document.querySelector('.clear');


for (let keyButton of keyButtons) {
  keyButton.onclick = function () {
     keyDisplay.textContent += keyButton.textContent;
     console.log(keyButton.textContent);
  };
}

clearButton.onclick = function () {
  keyDisplay.textContent = '';
  }
