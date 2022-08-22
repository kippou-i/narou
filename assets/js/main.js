//*------------------*
//*  hamburger
//*------------------*

$(function () {
  $('.header_hamburger').on('click', function () {
    $('.header_hamburger, .header_nav').toggleClass('open');
    $('body').toggleClass('noScroll');
  });
});

//*------------------*
//*  ncodeForm
//*------------------*

$(function () {
  $('#submit').on('click', function () {
    const ncodeArray = ncode.value.replace(/　/g, ' ').replace(/,/g, ' ').replace(/，/g, ' ').replace(/、/g, ' ');
    const ncodeValue = ncodeArray.split(' ');
    let ncodeData = [];
    for (i = 0; i < ncodeValue.length; i++) {
      ncodeData += ncodeValue[i] + ' OR ';
    }
    let ncodeInput = ncodeData.slice(0, -4);

    const wordArray = word.value.replace(/　/g, ' ').replace(/,/g, ' ').replace(/，/g, ' ').replace(/、/g, ' ');
    const wordValue = wordArray.split(' ');
    let wordData = [];
    for (i = 0; i < wordValue.length; i++) {
      wordData += wordValue[i] + ' ';
    }
    let wordInput = wordData.slice(0, -1);

    const negativeArray = negative.value.replace(/　/g, ' ').replace(/ /g, ' ').replace(/,/g, ' ').replace(/，/g, ' ').replace(/、/g, ' ');
    const negativeValue = negativeArray.split(' ');
    let negativeData = [];
    for (i = 0; i < negativeValue.length; i++) {
      negativeData += '-' + negativeValue[i] + ' ';
    }
    let negativeInput = negativeData.slice(0, -1);

    if (Object.keys(ncodeArray).length && Object.keys(negativeArray).length) {
      let searchValue = ncodeInput + ' ' + wordInput + ' ' + negativeInput;
      searchWord.value = searchValue;
    } else if (Object.keys(ncodeArray).length && !Object.keys(negativeArray).length) {
      let searchValue = ncodeInput + ' ' + wordInput;
      searchWord.value = searchValue;
    } else if (!Object.keys(ncodeArray).length && Object.keys(negativeArray).length) {
      let searchValue = wordInput + ' ' + negativeInput;
      searchWord.value = searchValue;
    } else {
      let searchValue = wordInput;
      searchWord.value = searchValue;
    }

  });
});