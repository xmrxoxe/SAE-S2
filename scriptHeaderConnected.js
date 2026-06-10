let select = document.getElementById('select');
let list_options = document.getElementById('list_options');
let selectOptions = document.getElementById('select_options');
let options = document.getElementsByClassName('options');
let searchInput = document.getElementById('search_input');

select.onclick = function() {
    list_options.classList.toggle('open');
}

for(option of options) {
    option.onclick = function() {
        searchInput.placeholder = `Rechercher dans ${this.innerText.toLowerCase()}...`;
    }
}

let dropdownHeader = document.getElementById('dropdownHeader');
let profileshowingHeader = document.getElementById('profileshowingHeader');

dropdownHeader.onclick = function() {
    profileshowingHeader.classList.toggle('open');
}
