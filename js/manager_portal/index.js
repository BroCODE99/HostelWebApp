//click for manager drop down menu
let dropDownBtn = document.querySelector(".user-pic");
let dropDownBtn2 = document.querySelector(".manager-profile h3");
//
let dropDownMenu = document.querySelector(".dropdown-menu-container");
let mainPage = document.querySelector(".page-content-container");
//

dropDownBtn.addEventListener("click", () => {
  dropDownMenu.classList.toggle("open-menu");
});

//
dropDownBtn2.addEventListener("click", () => {
  dropDownMenu.classList.toggle("open-menu");
});

mainPage.addEventListener("click", () => {
  if (dropDownMenu.classList.contains("open-menu")) {
    dropDownMenu.classList.remove("open-menu");
  }
});

// end navbar styling

//
