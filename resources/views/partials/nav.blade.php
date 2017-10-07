<nav class="navbar navbar-inverse">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                {{-- <a class="navbar-brand" href="{{ url('/') }}">Education</a> --}}
        </div>

         <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Festival 2018<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('festivaloffs/festivaloff') }}">Le Festival Officiel</a></li>
                            <li><a href="{{ url('festivalScolaire/festival_scolaire') }}">Le Festival Scolaire</a></li>
                            <li><a href="{{ url('evenements/evenement') }}">Les évènements</a></li>
                            <li><a href="{{ url('actions/action') }}">Action Hors Festival</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">La Progammation scolaire<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/abandonnes/abandonne') }}">Ne m'abandonne pas </a></li>
                            <li><a href="{{ url('/profs/prof') }}">Le Prof</a></li>
                            <li><a href="{{ url('/ecologies/ecologie') }}">Ecologie</a></li>
                            <li><a href="{{ url('/festins/festin_imaginaire') }}">Festins imaginaires</a></li>
                            <li><a href="{{ url('/moi/moi_juan') }}">Moi, Juan Carlos roi d'Espagne</a></li>
                            <li><a href="{{ url('/humours/humour_interdit') }}">Expo Humour Interdit</a></li>
                            <li><a href="{{ url('/forums/forum') }}">Forum des métiers</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jury webséries<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/participants/participer') }}">Comment participer</a></li>
                            <li><a href="{{ url('/reglements/reglement') }}">Règlement du prix</a></li>
                            <li><a href="{{ url('/inscriptions/inscription') }}">Inscription</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Inscription et info pratique<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Conditions d'inscriptions</a></li>
                            <li><a href="#">Info pratique</a></li>
                            <li><a href="{{ url('/accueil/inscription') }}">Inscription</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/accueil/contact') }}">Contact</a></li>

                </ul>

                <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                    @if (Auth::guest())
                            <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                     {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                            </li>
                    @endif
                </ul>
            </div>
</nav>
