function getValue(){
  let ncodeValue = ncode.value.replace('　',' ');
  let wordValue = word.value.replace('　',' ');
  let negativeValue = negative.value.replace(' ', ' -').replace('　', ' -');

  if (Object.keys(ncodeValue).length && Object.keys(negativeValue).length) {
    let searchValue = `${ncodeValue} ${wordValue} -${negativeValue}`;
    searchWord.value = searchValue;
  } else if (Object.keys(ncodeValue).length && !Object.keys(negativeValue).length) {
    let searchValue = `${ncodeValue} ${wordValue}`;
    searchWord.value = searchValue;
  } else if (!Object.keys(ncodeValue).length && Object.keys(negativeValue).length) {
    let searchValue = `${wordValue} -${negativeValue}`;
    searchWord.value = searchValue;
  } else {
    let searchValue = `${wordValue}`;
    searchWord.value = searchValue;
  }
}