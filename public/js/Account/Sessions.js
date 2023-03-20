if(document.getElementById('active').children.length == 0){
    document.getElementById('active').parentElement.style.display = 'none'
}
if(document.getElementById('closed').children.length == 0){
    document.getElementById('active').style.display = 'none'
}

function show(element){
    const el = document.getElementById(element)
    el.style.transitionDuration = el.children.length * 0.2 + 's'
    
    if(el.style.maxHeight === el.children.length * 80 + 'px'){
        el.parentElement.children[el.parentElement.children.length-1].innerHTML = 'Показать больше'
        el.style.maxHeight = 80 + 'px'
    }
    else{
        el.parentElement.children[el.parentElement.children.length-1].innerHTML = 'Скрыть'
        el.style.maxHeight = el.children.length * 80 + 'px'
    }
    

}


function aboutShow(location, lastActive, time, browser, Ip, Os, device, closed, sessionId){
    const about = document.getElementById('about');

    about.children[0].children[0].children[1].children[0].children[0].children[1].innerHTML = location
    about.children[0].children[0].children[1].children[0].children[1].children[1].innerHTML = lastActive
    about.children[0].children[0].children[1].children[0].children[2].children[1].innerHTML = time
    about.children[0].children[0].children[1].children[0].children[3].children[1].innerHTML = browser
    about.children[0].children[0].children[1].children[0].children[4].children[1].innerHTML = Ip

    about.children[0].children[0].children[0].children[0].children[0].innerHTML = (closed == 'true') ? '<img src="/public/icons/closed-'+ device +'-icon.svg" alt="">' : '<img src="/public/icons/'+ device +'-icon.svg" alt="">'

    about.children[0].children[0].children[0].children[0].children[1].innerHTML = Os
    about.children[0].children[0].children[0].children[0].children[2].innerHTML = time

    about.children[0].children[0].children[1].children[1].value = sessionId

    if(about.style.top == '0px'){
        about.style.top = '100%';
        about.style.opacity = '0';
    }
    else{
        about.style.top = '0px';
        about.style.opacity = '1';
    }
}