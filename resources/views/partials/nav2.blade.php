<nav class="navbar navbar-inverse navbar-static-top marginBottom-0" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
     <div>
                <ul class="nav nav-pills nav-stacked">
                    <li class="dropdown"><a href="{{ url('qui sommes nous') }}" class="dropdown-toggle" data-toggle="dropdown" style="color: #777777">Accueil<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/') }}">Edito</a></li>
                            <li><a href="{{ url('actualite') }}">Actualité</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="{{ url('qui sommes nous') }}" class="dropdown-toggle" data-toggle="dropdown" style="color: #777777">Qui sommes nous<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/projets/projet') }}">Nos projets</a></li>
                            <li><a href="{{ url('/territoires/territoire') }}">Le Térritoire</a></li>
                            <li><a href="{{ url('/soutenirs/soutenir') }}">Soutenir le Festival</a></li>
                            <li><a href="{{ url('/devenirs/devenir') }}">Devenir bénévole</a></li>
                            <li><a href="{{ url('/stages/stage') }}">Offre de stage</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('galerie') }}" style="color: #777777">Galerie</a></li>
                    <li ><a href="{{ url('partenaire') }}" style="color: #777777">Nos partenaires</a></li>
                </ul>
        </div>
</nav>
