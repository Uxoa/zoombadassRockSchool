let elements = document.getElementsByClassName('editStudent');
let confirmIt = function (element) {
    if (!confirm('Are you sure edit?')) element.preventDefault();
};
for (let index = 0, l = elements.length; index < l; index++) {
    elements[index].addEventListener('click', confirmIt, false);
}


