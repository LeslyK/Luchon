
<div class="container">     
    <div class="rows">

        <div class="form-group">
            <label for="title" class="control-label sr-only">Titre</label>
            <input type="text" name="title" id="title" placeholder="Titre de l'evenement" value="{{ old('title') }}" class="form-contol">
            {!! $errors->first('title', '<span class="help-block">:message</span>') !!}    
        </div>
        
            <select name="test" style="color: #000409">
                <optgroup label="Accueil">
                    <option value="1">Edito</option>
                    <option value="2">Actualité</option> 
                </optgroup>
                <optgroup label="Festival 2018">
                    <option value="1" >Le festival Officiel</option>
                    <option value="2" >Le festival Scolaire</option>
                    <option value="3" >Le évènements</option>
                    <option value="4" >Action Hors Festival</option>
                </optgroup>
                <optgroup label="Programmation scolaire">
                    <option value="1">Ne m'abandonne pas</option>
                    <option value="2">Le Prof</option> 
                    <option value="3">Ecologie</option>                   
                    <option value="4">Festins imaginaires</option>
                    <option value="5">Moi, Juan Carlos roi d'Espagne</option>
                    <option value="6">Expo Humour Interdit</option>
                    <option value="7">Forum des métiers</option>
                </optgroup>

                 <optgroup label="Qui sommes nous">
                    <option value="1">Le projet de l'association</option>
                    <option value="2">Le Térritoire</option> 
                    <option value="3">Soutenir le Festival</option>                   
                    <option value="4">Devenir bénévole</option>
                    <option value="5">Offre de stage</option>
                </optgroup>
            </select>

            

        <div class="form-group">
            <label for="description" class="control-label sr-only">Description</label>
            <textarea  name="description" id="description" placeholder="description de l'evenement" cols="150" rows="10" value="{{ old('title') }}" class="form-contol"></textarea>
            {!! $errors->first('title', '<span class="help-block">:message</span>') !!}    
        </div>

        <div class="form-group" cols="10">
            <input type="submit" value="Creer un evenement" class="btn ">
        </div>
    </div>        
</div>          
