function changeLanguage (languageCode) {
    Array.from (document.getElementsByClassName ('lang')).forEach (function (elem) {
        if (elem.classList.contains ('lang-' + languageCode)) {
            elem.style.display = 'initial';
        }
        else {
            elem.style.display = 'none';
        }
    });
}
