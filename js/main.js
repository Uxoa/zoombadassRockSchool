let elems = document.getElementsByClassName('editStudent');
let confirmIt = function (e) {
    if (!confirm('Are you sure edit?')) e.preventDefault();
};
for (let index = 0, l = elems.length; index < l; index++) {
    elems[index].addEventListener('click', confirmIt, false);
}