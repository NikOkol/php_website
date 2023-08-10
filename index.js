
input.oninput = function() 
{
    result.innerHTML = input.value * 1000;
};



document.getElementById('input').onkeydown = function (e) {
    return !(/^[А-Яа-яA-Za-z ]$/.test(e.key));
}

