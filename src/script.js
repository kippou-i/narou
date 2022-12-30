//*------------------*
//*  ダークモード
//*------------------*

// OSの設定がダークモード
const osDark = window.matchMedia("(prefers-color-scheme: dark)");

// スイッチのinput要素（checkbox）
const modeSwitch = document.getElementById("dark-switch__btn");

// スイッチの操作に応じて切り替え処理
modeSwitch.addEventListener("change", () => {
  if (modeSwitch.checked) {
    darkModeOn();
    sessionStorage.setItem("darkMode", "on");
  } else {
    darkModeOff();
    sessionStorage.setItem("darkMode", "off");
  }
});

// ダークモードがオンの時に実行する処理
function darkModeOn() {
  document.documentElement.classList.add("darkmode"); // ルート要素<html>にクラスを追加
  modeSwitch.checked = true;
}
// ダークモードがオフの時に実行する処理
function darkModeOff() {
  document.documentElement.classList.remove("darkmode"); // クラスの削除
  modeSwitch.checked = false;
}

// イベントリスナー
const listener = (event) => {
  if (event.matches) {
    darkModeOn();
  } else {
    darkModeOff();
  }
};

// リスナー登録
osDark.addEventListener("change", listener);

// 初期化処理
listener(osDark);

// ロード時の状況に応じて切り替え
if (sessionStorage.getItem("darkMode") === "on") {
  darkModeOn();
} else if (sessionStorage.getItem("darkMode") === "off") {
  darkModeOff();
}


//*------------------*
//*  カレント表示
//*------------------*

jQuery(function ($) {
  let url = my_path.home_url + '/recommend/';
  let href = $(location).attr('href');

  if (href.match(url)) {
    $('.menu-item-32').addClass('current-menu-item');
  }
});


//*------------------*
//*  サーチフォーム
//*------------------*

jQuery(function ($) {
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