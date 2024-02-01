/*===================
18. Theme Setting js
=======================*/

const root = document.querySelector(":root");
const css = getComputedStyle(body);
const bodyThemeColor = css.getPropertyValue('--theme-color');

const themeBtnParent = document.querySelector(".light-dark-box");

const rtlBtn = document.querySelector("#rtl-btn");
const darkBtn = document.querySelector("#dark-btn");
const html = document.querySelector("html");
const rtlLink = document.querySelector("#rtl-link");
const darkLink = document.querySelector("#change-link");

const activeRemoveFn = function (elList) {
    elList.forEach(el => {
        el.classList.remove("active");
    })
}


/// Bootstrap Tool Tip ///
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
});

feather.replace();