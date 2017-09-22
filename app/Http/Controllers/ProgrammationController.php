<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgrammationController extends Controller
{
    public function abandonne(){       

        return view('programmation_scolaire.abandonne_pas');
    }

    public function prof(){   

        return view('programmation_scolaire.prof');
    }

    public function ecologie(){   

        return view('programmation_scolaire.ecologie');
    }
    
    public function festin(){   

        return view('programmation_scolaire.festin_imaginaire');
    }

    public function moijuan(){   

        return view('programmation_scolaire.moi_juan');
    }

    public function humourinterdit(){   

        return view('programmation_scolaire.humour_interdit');
    }

    public function forum(){   

        return view('programmation_scolaire.forum');
    }


}
