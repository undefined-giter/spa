// 'use strict' is less permissive but avoid problems,
// it report potentials errors and stop the script if it is hazardous
'use strict';

const button = document.querySelector('#changeability');
const changes = document.querySelectorAll('.changes');

document.addEventListener('DOMContentLoaded', JSIsUp);
button.addEventListener('click', displayEdit)

function JSIsUp(){
    changes.forEach(function(start){
        start.classList.add('hidden');
    });
    button.classList.remove('hidden');
}

function displayEdit(){
    changes.forEach(function(startRemove){
        startRemove.classList.toggle('hidden');
    });
    if (button.innerHTML === 'Modifier'){
        button.innerHTML = 'Cacher';
    } else{
        button.innerHTML = 'Modifier';
    }
}