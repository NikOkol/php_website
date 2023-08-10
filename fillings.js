import {fillings} from "./model.js"

const $site = document.querySelector('#site')

fillings.forEach(block => {
    
    const toHTML = block.output()

    $site.insertAdjacentHTML('beforeend', toHTML)

});

