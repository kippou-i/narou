function inputChange(event){
  if (ncode) {
    let ncodeValue = ncode.value;
    let wordValue = word.value;
    let searchValue = `${ncodeValue} ${wordValue}`;
    searchWord.value = searchValue;
  }
}
let word = document.getElementById('word');
word.addEventListener('change', inputChange);
let ncode = document.getElementById('ncode');
ncode.addEventListener('change', inputChange);