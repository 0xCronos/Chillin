
function initParallax(id){
    //Efecto parallax en el inicio
    var scene = document.getElementById(id);
    var parallaxInstance = new Parallax(scene);
    parallaxInstance.friction(1, 1);
}

function initSmoothScroll(){
    var scroll = new SmoothScroll('a[href*="#"]', {
         speed: 500,
         speedAsDuration: true
    });
}

function updateNavbarIcons(){
    var size = window.matchMedia("(max-width: 1700px)");
    var icons = document.getElementsByClassName('icon');
    for(var i = 0; i< icons.length; i++){
        if(size.matches){
            icons[i].style.display = 'none';
        }else{
            icons[i].style.display = '';
        }
    }
}

//Scroll down arrow animation
function animateArrow(speed){
    if(window.scrollY < 700){
        $('.scroll-button').effect("bounce", {times:2}, speed);
    }
}

//Crea elementos e inserta datos en formato json -> javascript object
function initStaffList(data){

    //json to js Object
    var staff = JSON.parse(data);
    var container = document.getElementById('staff-container');
    container.style.display = "none";

    staff["staff"].forEach((item, i) => {

        //Creacion de elementos
        var content  = document.createElement("div");
        var username = document.createElement("h5");
        var role     = document.createElement("p");
        var image    = document.createElement("img");

        //Insercion de elementos
        container.appendChild(content);
        content.appendChild(image);
        content.appendChild(username);
        content.appendChild(role);

        //Añade clases de elementos
        content.classList.add("text-center");
        username.classList.add("staff-username");
        role.classList.add("staff-role");
        image.classList.add("staff-head");

        //Añade contenido de los elementos
        username.textContent = item.username.trim();
        role.textContent = item.role.trim();
        image.src = "https://crafatar.com/avatars/" + item.UUID.trim();
    });
}

/* MAIN CONTENT */
$(document).ready(function(){

    //Data staff para glider
    let data = '{ "staff":[' +
    '{"username": "Rokilo", "role": "Owner", "UUID": "354d0d3ee13d4df09b979f2e89de4956"},' +
    '{"username": "Danisiiwii", "role": "Owner", "UUID": "749fa1b74bb8460a8be508fec4933a54"},' +
    '{"username": "Mesticke", "role": "Admin", "UUID": "a657fba51b1d48f3ba47beecd72b98aa"},' +
    '{"username": "PandaPaw1", "role": "Web master", "UUID": "727866205a9a4d5589aadc47720f0b45"},' +
    '{"username": "Torokoko", "role": "Web master", "UUID": "3910a28ed6064200bfce56c2ca3008f0"} ]}'

    //Efecto parallax en el inicio
    initParallax('scene');

    //Efecto de smooth scroll
    initSmoothScroll();

    //Iconos desaparecen al achicar pantalla, refresco cada 10 ms
    setInterval(function(){
        updateNavbarIcons();
    }, 10);

    //animacion flecha smooth scroll down
    setTimeout(function(){
        //delay 1 sec primera animacion
        animateArrow(500);
    }, 1000);
    setInterval(function(){
        animateArrow(500);
    }, 3000);

    //Añade dos copias de la lista de staff para efecto doble
    initStaffList(data);
    initStaffList(data);

    //Carga glider y vulve visible contenedor de usuarios
    window.addEventListener('load', function(){
        //Hace visible el contenedor luego de añadir el handler
        var container = document.getElementById('staff-container');
        container.style.display = "";
        new Glider(document.querySelector('.glider'), {
            slidesToShow: 5,
            slidesToScroll: 1,
            draggable: true,
            duration: 0.9,
            scrollLockDelay: 400,
            dragVelocity: 1,
            rewind: true,
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            }
        });
    });

    //Funcion de inicializacion de cajas de dialogo
    (function() {
        var dlgtrigger = document.querySelector('[data-dialog]');
        var somedialog = document.getElementById(dlgtrigger.getAttribute('data-dialog'));
        var dlg = new DialogFx(somedialog);

        dlgtrigger.addEventListener('click', dlg.toggle.bind(dlg));
    })();
});
