
(function () {
    const menuToggle = document.querySelector('.menu-toggle')
    menuToggle.onclick = function (e) {
        const body = document.querySelector('body')
        body.classList.toggle('hide-sidebar')
    }
})()

function addOneSecond(hour, min, sec) {
    const d = new Date()
    d.setHours(parseInt(hour)) // garantir que as horas vao passar para inteiro
    d.setMinutes(parseInt(min)) 
    d.setSeconds(parseInt(sec) + 1)
    
    const h = `${d.getHours()}`.padStart(2, 0) // se retornar um digito apenas, quero que mostre 2 com um 0 à esquerda
    const m = `${d.getMinutes()}`.padStart(2,0)
    const s = `${d.getSeconds()}`.padStart(2,0)

    return `${h}:${m}:${s}`
}
function activateClock() {
    const activeClock = document.querySelector('[active-clock]')
    if(!activeClock) return

    setInterval(function() {
        // '02:10:20' => ['02', '10', '20']
        const parts = activeClock.innerHTML.split(':') // dividir a string pelos :
        activeClock.innerHTML = addOneSecond(...parts) // parts[0], parts[1], parts[2]
    }, 1000) // 1000 milisegundos - 1 segundo
}

activateClock()