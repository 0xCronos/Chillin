<nav class="navbar navbar-light navbar-expand-md bg-faded justify-content-center sticky-top">
    <a href="#" class="navbar-brand d-flex w-50 mr-auto" style="cursor:default;"><span class="nav-link-text">Chillin</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse w-100" id="navbar">
        <ul class="navbar-nav w-100 justify-content-center">
            <li class="nav-item">
                <a data-scroll class="nav-link" href="index.php#">
                    <span class="nav-link-text">
                        <i class="fas fa-home icon"></i>
                        Inicio
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php#community">
                    <i class="fas fa-users icon"></i>
                    <span class="nav-link-text">Comunidad</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php#discord">
                    <i class="fab fa-discord icon"></i>
                    <span class="nav-link-text">Discord</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="store.php">
                    <i class="fas fa-donate icon"></i>
                    <span class="nav-link-text">Donaciones</span>
                </a>
            </li>
        </ul>
        <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
            <li data-dialog="somedialog" class="nav-item" style="background-color: #FFFFFF">
                <a class="nav-link" href="#">
                    <div class="button-wrap">
                        <span  class="trigger nav-link-text" style="color:#FF2968">Empezar a jugar</span>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</nav>
<!-- dialog trigger -->
<div id="somedialog" class="dialog" style="z-index: 1">
    <div class="dialog__overlay"></div>
    <div class="dialog__content">
        <div class="morph-shape">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 560 280" preserveAspectRatio="none">
                <rect x="3" y="3" fill="none" width="556" height="276"/>
            </svg>
        </div>
        <div class="dialog-inner">
            <h3><strong class="text-pink">1.- </strong>Descargar Minecraft</h3>
            <a class="text-decoration-none text-pink-link" href="https://launcher.mojang.com/download/MinecraftInstaller.msi">Launcher Premium</a>
            <br/>
            <a class="text-decoration-none text-pink-link" href="https://api.launcherfenix.com.ar/redirect?u=https://files.launcherfenix.com.ar/prelauncher/v6/LauncherFenix-Minecraft-6.exe&amp;c&amp;n=PreLauncherV6_EXE_Local" >Launcher no Premium</a>
            <h3><strong class="text-pink">2.- </strong>Instalar version 1.14.4</h3>
            <h3><strong class="text-pink">3.- </strong>Ir a multijugador</h3>
            <h3><strong class="text-pink">4.- </strong>Agregar IP a la lista de servidores</h3>
            <div class="mt-5"><span class="nav-link-text action p-2" data-dialog-close>Cerrar</span></div>
        </div>
    </div>
</div>
