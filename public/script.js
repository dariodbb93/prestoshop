let email = document.querySelector("#email");
let texture = document.querySelector('#texture');
let navDark = document.querySelector("#navDark");
let headerDark = document.querySelector("#headerDark");
let headerText = document.querySelector("#headerText");
let footer = document.querySelector("#footer");
let footerText = document.querySelector("#footerText");
let b;



function emailText() {
    email.innerHTML = "dario@dario-dbb.it";
}


if (localStorage.counter) {
    b = localStorage.counter;
}
else {
    localStorage.counter = 0;
    b = localStorage.counter;
}




if (b == 1) {
    
 
    texture.classList.remove('texture');
    navDark.classList.remove('navBackground');
    navDark.classList.add('navBackgroundDark');
    texture.classList.add('textureDark');
    headerDark.classList.remove('headerBackground');
    headerDark.classList.add('headerBackgroundDark');
    headerText.classList.remove('text-dark');
    headerText.classList.add('headerDark');
    footer.classList.remove('footerBackground');
    footer.classList.add('footerBackgroundDark');
    footerText.classList.add('footerText');

}

else if (b == 0) {

   
}




function changeTheme() { //funzione che cambia il tema //


    if (b == 0) {

        texture.classList.remove('texture');
        navDark.classList.remove('navBackground');
        navDark.classList.add('navBackgroundDark');
        texture.classList.add('textureDark');
        headerDark.classList.remove('headerBackground');
        headerDark.classList.add('headerBackgroundDark');
        headerText.classList.remove('text-dark');
        headerText.classList.add('headerDark');
        footer.classList.remove('footerBackground');
        footer.classList.add('footerBackgroundDark');
        footerText.classList.add('footerText');
     

        localStorage.counter = 1;
        b = parseInt(localStorage.counter);



    }
    else {

        navDark.classList.remove('navBackgroundDark');
        navDark.classList.add('navBackground');
        texture.classList.remove('textureDark');
        texture.classList.add('texture');
        headerDark.classList.remove('headerBackgroundDark');
        headerDark.classList.add('headerBackground');
        headerText.classList.remove('headerDark');
        footer.classList.remove('footerBackgroundDark');
        footer.classList.add('footerBackground');
        headerText.classList.add('text-dark');
        footerText.classList.remove('footerText');

     

        localStorage.counter = 0;
        b = parseInt(localStorage.counter);



    }
}
