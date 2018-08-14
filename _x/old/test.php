<?php
class stdObject {
    public function __construct(array $arguments = array()) {
        if (!empty($arguments)) {
            foreach ($arguments as $property => $argument) {
                $this->{$property} = $argument;
            }
        }
    }

    public function __call($method, $arguments) {
        $arguments = array_merge(array("stdObject" => $this), $arguments); // Note: method argument 0 will always referred to the main class ($this).
        if (isset($this->{$method}) && is_callable($this->{$method})) {
            return call_user_func_array($this->{$method}, $arguments);
        } else {
            throw new Exception("Fatal error: Call to undefined method stdObject::{$method}()");
        }
    }
}

$demihumans = array();

//Android
$demihumans[0] = new stdObject();
$demihumans[0]->nombre = 'Android';
$demihumans[0]->slug = 'demi_android';
$demihumans[0]->stats = new stdObject();
$demihumans[0]->vid = 100;
$demihumans[0]->ene = 100;
$demihumans[0]->atk = 100;
$demihumans[0]->def = 100;
$demihumans[0]->mag = 100;
$demihumans[0]->res = 100;
$demihumans[0]->acc = 100;
$demihumans[0]->vel = 100;
$demihumans[0]->ataques = array();
$demihumans[0]->ataques[0] = 'Ataque 1';
$demihumans[0]->ataques[1] = 'Ataque 2';
$demihumans[0]->ataques[2] = 'Ataque 3';
$demihumans[0]->habili = array();
$demihumans[0]->habili[0] = 'Habilidad 1';
$demihumans[0]->habili[1] = 'Habilidad 2';
$demihumans[0]->habili[2] = 'Habilidad 3';

//Angel
$demihumans[1] = new stdObject();
$demihumans[1]->nombre = 'Angel';
$demihumans[1]->slug = 'demi_angel';
$demihumans[1]->stats = new stdObject();
$demihumans[1]->vid = 100;
$demihumans[1]->ene = 100;
$demihumans[1]->atk = 100;
$demihumans[1]->def = 100;
$demihumans[1]->mag = 100;
$demihumans[1]->res = 100;
$demihumans[1]->acc = 100;
$demihumans[1]->vel = 100;
$demihumans[1]->ataques = array();
$demihumans[1]->ataques[0] = 'Ataque 1';
$demihumans[1]->ataques[1] = 'Ataque 2';
$demihumans[1]->ataques[2] = 'Ataque 3';
$demihumans[1]->habili = array();
$demihumans[1]->habili[0] = 'Habilidad 1';
$demihumans[1]->habili[1] = 'Habilidad 2';
$demihumans[1]->habili[2] = 'Habilidad 3';

//Archer
$demihumans[2] = new stdObject();
$demihumans[2]->nombre = 'Archer';
$demihumans[2]->slug = 'demi_archer';
$demihumans[2]->stats = new stdObject();
$demihumans[2]->vid = 100;
$demihumans[2]->ene = 100;
$demihumans[2]->atk = 100;
$demihumans[2]->def = 100;
$demihumans[2]->mag = 100;
$demihumans[2]->res = 100;
$demihumans[2]->acc = 100;
$demihumans[2]->vel = 100;
$demihumans[2]->ataques = array();
$demihumans[2]->ataques[0] = 'Ataque 1';
$demihumans[2]->ataques[1] = 'Ataque 2';
$demihumans[2]->ataques[2] = 'Ataque 3';
$demihumans[2]->habili = array();
$demihumans[2]->habili[0] = 'Habilidad 1';
$demihumans[2]->habili[1] = 'Habilidad 2';
$demihumans[2]->habili[2] = 'Habilidad 3';

//Battle Suit
$demihumans[3] = new stdObject();
$demihumans[3]->nombre = 'Battle Suit';
$demihumans[3]->slug = 'demi_battlesuit';
$demihumans[3]->stats = new stdObject();
$demihumans[3]->vid = 100;
$demihumans[3]->ene = 100;
$demihumans[3]->atk = 100;
$demihumans[3]->def = 100;
$demihumans[3]->mag = 100;
$demihumans[3]->res = 100;
$demihumans[3]->acc = 100;
$demihumans[3]->vel = 100;
$demihumans[3]->ataques = array();
$demihumans[3]->ataques[0] = 'Ataque 1';
$demihumans[3]->ataques[1] = 'Ataque 2';
$demihumans[3]->ataques[2] = 'Ataque 3';
$demihumans[3]->habili = array();
$demihumans[3]->habili[0] = 'Habilidad 1';
$demihumans[3]->habili[1] = 'Habilidad 2';
$demihumans[3]->habili[2] = 'Habilidad 3';

//Beast Master
$demihumans[4] = new stdObject();
$demihumans[4]->nombre = 'Beast Master';
$demihumans[4]->slug = 'demi_beastmaster';
$demihumans[4]->stats = new stdObject();
$demihumans[4]->vid = 100;
$demihumans[4]->ene = 100;
$demihumans[4]->atk = 100;
$demihumans[4]->def = 100;
$demihumans[4]->mag = 100;
$demihumans[4]->res = 100;
$demihumans[4]->acc = 100;
$demihumans[4]->vel = 100;
$demihumans[4]->ataques = array();
$demihumans[4]->ataques[0] = 'Ataque 1';
$demihumans[4]->ataques[1] = 'Ataque 2';
$demihumans[4]->ataques[2] = 'Ataque 3';
$demihumans[4]->habili = array();
$demihumans[4]->habili[0] = 'Habilidad 1';
$demihumans[4]->habili[1] = 'Habilidad 2';
$demihumans[4]->habili[2] = 'Habilidad 3';

//Berserker
$demihumans[5] = new stdObject();
$demihumans[5]->nombre = 'Berserker';
$demihumans[5]->slug = 'demi_berserker';
$demihumans[5]->stats = new stdObject();
$demihumans[5]->vid = 100;
$demihumans[5]->ene = 100;
$demihumans[5]->atk = 100;
$demihumans[5]->def = 100;
$demihumans[5]->mag = 100;
$demihumans[5]->res = 100;
$demihumans[5]->acc = 100;
$demihumans[5]->vel = 100;
$demihumans[5]->ataques = array();
$demihumans[5]->ataques[0] = 'Ataque 1';
$demihumans[5]->ataques[1] = 'Ataque 2';
$demihumans[5]->ataques[2] = 'Ataque 3';
$demihumans[5]->habili = array();
$demihumans[5]->habili[0] = 'Habilidad 1';
$demihumans[5]->habili[1] = 'Habilidad 2';
$demihumans[5]->habili[2] = 'Habilidad 3';

//Bodyguard
$demihumans[6] = new stdObject();
$demihumans[6]->nombre = 'Bodyguard';
$demihumans[6]->slug = 'demi_bodyguard';
$demihumans[6]->stats = new stdObject();
$demihumans[6]->vid = 100;
$demihumans[6]->ene = 100;
$demihumans[6]->atk = 100;
$demihumans[6]->def = 100;
$demihumans[6]->mag = 100;
$demihumans[6]->res = 100;
$demihumans[6]->acc = 100;
$demihumans[6]->vel = 100;
$demihumans[6]->ataques = array();
$demihumans[6]->ataques[0] = 'Ataque 1';
$demihumans[6]->ataques[1] = 'Ataque 2';
$demihumans[6]->ataques[2] = 'Ataque 3';
$demihumans[6]->habili = array();
$demihumans[6]->habili[0] = 'Habilidad 1';
$demihumans[6]->habili[1] = 'Habilidad 2';
$demihumans[6]->habili[2] = 'Habilidad 3';

//Female Boxer
$demihumans[7] = new stdObject();
$demihumans[7]->nombre = 'Female Boxer';
$demihumans[7]->slug = 'demi_boxerF';
$demihumans[7]->stats = new stdObject();
$demihumans[7]->vid = 100;
$demihumans[7]->ene = 100;
$demihumans[7]->atk = 100;
$demihumans[7]->def = 100;
$demihumans[7]->mag = 100;
$demihumans[7]->res = 100;
$demihumans[7]->acc = 100;
$demihumans[7]->vel = 100;
$demihumans[7]->ataques = array();
$demihumans[7]->ataques[0] = 'Ataque 1';
$demihumans[7]->ataques[1] = 'Ataque 2';
$demihumans[7]->ataques[2] = 'Ataque 3';
$demihumans[7]->habili = array();
$demihumans[7]->habili[0] = 'Habilidad 1';
$demihumans[7]->habili[1] = 'Habilidad 2';
$demihumans[7]->habili[2] = 'Habilidad 3';

//Male Boxer
$demihumans[8] = new stdObject();
$demihumans[8]->nombre = 'Male Boxer';
$demihumans[8]->slug = 'demi_boxerM';
$demihumans[8]->stats = new stdObject();
$demihumans[8]->vid = 100;
$demihumans[8]->ene = 100;
$demihumans[8]->atk = 100;
$demihumans[8]->def = 100;
$demihumans[8]->mag = 100;
$demihumans[8]->res = 100;
$demihumans[8]->acc = 100;
$demihumans[8]->vel = 100;
$demihumans[8]->ataques = array();
$demihumans[8]->ataques[0] = 'Ataque 1';
$demihumans[8]->ataques[1] = 'Ataque 2';
$demihumans[8]->ataques[2] = 'Ataque 3';
$demihumans[8]->habili = array();
$demihumans[8]->habili[0] = 'Habilidad 1';
$demihumans[8]->habili[1] = 'Habilidad 2';
$demihumans[8]->habili[2] = 'Habilidad 3';

//Cheerleader
$demihumans[9] = new stdObject();
$demihumans[9]->nombre = 'Cheerleader';
$demihumans[9]->slug = 'demi_cheerleader';
$demihumans[9]->stats = new stdObject();
$demihumans[9]->vid = 100;
$demihumans[9]->ene = 100;
$demihumans[9]->atk = 100;
$demihumans[9]->def = 100;
$demihumans[9]->mag = 100;
$demihumans[9]->res = 100;
$demihumans[9]->acc = 100;
$demihumans[9]->vel = 100;
$demihumans[9]->ataques = array();
$demihumans[9]->ataques[0] = 'Ataque 1';
$demihumans[9]->ataques[1] = 'Ataque 2';
$demihumans[9]->ataques[2] = 'Ataque 3';
$demihumans[9]->habili = array();
$demihumans[9]->habili[0] = 'Habilidad 1';
$demihumans[9]->habili[1] = 'Habilidad 2';
$demihumans[9]->habili[2] = 'Habilidad 3';

//Cleric
$demihumans[10] = new stdObject();
$demihumans[10]->nombre = 'Cleric';
$demihumans[10]->slug = 'demi_cleric';
$demihumans[10]->stats = new stdObject();
$demihumans[10]->vid = 100;
$demihumans[10]->ene = 100;
$demihumans[10]->atk = 100;
$demihumans[10]->def = 100;
$demihumans[10]->mag = 100;
$demihumans[10]->res = 100;
$demihumans[10]->acc = 100;
$demihumans[10]->vel = 100;
$demihumans[10]->ataques = array();
$demihumans[10]->ataques[0] = 'Ataque 1';
$demihumans[10]->ataques[1] = 'Ataque 2';
$demihumans[10]->ataques[2] = 'Ataque 3';
$demihumans[10]->habili = array();
$demihumans[10]->habili[0] = 'Habilidad 1';
$demihumans[10]->habili[1] = 'Habilidad 2';
$demihumans[10]->habili[2] = 'Habilidad 3';

//Demon Knight
$demihumans[11] = new stdObject();

$demihumans[11]->nombre = 'Demon Knight';
$demihumans[11]->slug = 'demi_dknight';
$demihumans[11]->stats = new stdObject();
$demihumans[11]->vid = 100;
$demihumans[11]->ene = 100;
$demihumans[11]->atk = 100;
$demihumans[11]->def = 100;
$demihumans[11]->mag = 100;
$demihumans[11]->res = 100;
$demihumans[11]->acc = 100;
$demihumans[11]->vel = 100;
$demihumans[11]->ataques = array();
$demihumans[11]->ataques[0] = 'Ataque 1';
$demihumans[11]->ataques[1] = 'Ataque 2';
$demihumans[11]->ataques[2] = 'Ataque 3';
$demihumans[11]->habili = array();
$demihumans[11]->habili[0] = 'Habilidad 1';
$demihumans[11]->habili[1] = 'Habilidad 2';
$demihumans[11]->habili[2] = 'Habilidad 3';

//Female Fighter
$demihumans[12] = new stdObject();
$demihumans[12]->nombre = 'Female Fighter';
$demihumans[12]->slug = 'demi_fighterF';
$demihumans[12]->stats = new stdObject();
$demihumans[12]->vid = 100;
$demihumans[12]->ene = 100;
$demihumans[12]->atk = 100;
$demihumans[12]->def = 100;
$demihumans[12]->mag = 100;
$demihumans[12]->res = 100;
$demihumans[12]->acc = 100;
$demihumans[12]->vel = 100;
$demihumans[12]->ataques = array();
$demihumans[12]->ataques[0] = 'Ataque 1';
$demihumans[12]->ataques[1] = 'Ataque 2';
$demihumans[12]->ataques[2] = 'Ataque 3';
$demihumans[12]->habili = array();
$demihumans[12]->habili[0] = 'Habilidad 1';
$demihumans[12]->habili[1] = 'Habilidad 2';
$demihumans[12]->habili[2] = 'Habilidad 3';

//Male Fighter
$demihumans[13] = new stdObject();
$demihumans[13]->nombre = 'Male Fighter';
$demihumans[13]->slug = 'demi_fighterM';
$demihumans[13]->stats = new stdObject();
$demihumans[13]->vid = 100;
$demihumans[13]->ene = 100;
$demihumans[13]->atk = 100;
$demihumans[13]->def = 100;
$demihumans[13]->mag = 100;
$demihumans[13]->res = 100;
$demihumans[13]->acc = 100;
$demihumans[13]->vel = 100;
$demihumans[13]->ataques = array();
$demihumans[13]->ataques[0] = 'Ataque 1';
$demihumans[13]->ataques[1] = 'Ataque 2';
$demihumans[13]->ataques[2] = 'Ataque 3';
$demihumans[13]->habili = array();
$demihumans[13]->habili[0] = 'Habilidad 1';
$demihumans[13]->habili[1] = 'Habilidad 2';
$demihumans[13]->habili[2] = 'Habilidad 3';

//Geomancer
$demihumans[14] = new stdObject();
$demihumans[14]->nombre = 'Geomancer';
$demihumans[14]->slug = 'demi_geomancer';
$demihumans[14]->stats = new stdObject();
$demihumans[14]->vid = 100;
$demihumans[14]->ene = 100;
$demihumans[14]->atk = 100;
$demihumans[14]->def = 100;
$demihumans[14]->mag = 100;
$demihumans[14]->res = 100;
$demihumans[14]->acc = 100;
$demihumans[14]->vel = 100;
$demihumans[14]->ataques = array();
$demihumans[14]->ataques[0] = 'Ataque 1';
$demihumans[14]->ataques[1] = 'Ataque 2';
$demihumans[14]->ataques[2] = 'Ataque 3';
$demihumans[14]->habili = array();
$demihumans[14]->habili[0] = 'Habilidad 1';
$demihumans[14]->habili[1] = 'Habilidad 2';
$demihumans[14]->habili[2] = 'Habilidad 3';

//Guardian
$demihumans[15] = new stdObject();
$demihumans[15]->nombre = 'Guardian';
$demihumans[15]->slug = 'demi_guardian';
$demihumans[15]->stats = new stdObject();
$demihumans[15]->vid = 100;
$demihumans[15]->ene = 100;
$demihumans[15]->atk = 100;
$demihumans[15]->def = 100;
$demihumans[15]->mag = 100;
$demihumans[15]->res = 100;
$demihumans[15]->acc = 100;
$demihumans[15]->vel = 100;
$demihumans[15]->ataques = array();
$demihumans[15]->ataques[0] = 'Ataque 1';
$demihumans[15]->ataques[1] = 'Ataque 2';
$demihumans[15]->ataques[2] = 'Ataque 3';
$demihumans[15]->habili = array();
$demihumans[15]->habili[0] = 'Habilidad 1';
$demihumans[15]->habili[1] = 'Habilidad 2';
$demihumans[15]->habili[2] = 'Habilidad 3';

//Gunner
$demihumans[16] = new stdObject();
$demihumans[16]->nombre = 'Gunner';
$demihumans[16]->slug = 'demi_gunner';
$demihumans[16]->stats = new stdObject();
$demihumans[16]->vid = 100;
$demihumans[16]->ene = 100;
$demihumans[16]->atk = 100;
$demihumans[16]->def = 100;
$demihumans[16]->mag = 100;
$demihumans[16]->res = 100;
$demihumans[16]->acc = 100;
$demihumans[16]->vel = 100;
$demihumans[16]->ataques = array();
$demihumans[16]->ataques[0] = 'Ataque 1';
$demihumans[16]->ataques[1] = 'Ataque 2';
$demihumans[16]->ataques[2] = 'Ataque 3';
$demihumans[16]->habili = array();
$demihumans[16]->habili[0] = 'Habilidad 1';
$demihumans[16]->habili[1] = 'Habilidad 2';
$demihumans[16]->habili[2] = 'Habilidad 3';

//Gunslinger
$demihumans[17] = new stdObject();
$demihumans[17]->nombre = 'Gunslinger';
$demihumans[17]->slug = 'demi_gunslinger';
$demihumans[17]->stats = new stdObject();
$demihumans[17]->vid = 100;
$demihumans[17]->ene = 100;
$demihumans[17]->atk = 100;
$demihumans[17]->def = 100;
$demihumans[17]->mag = 100;
$demihumans[17]->res = 100;
$demihumans[17]->acc = 100;
$demihumans[17]->vel = 100;
$demihumans[17]->ataques = array();
$demihumans[17]->ataques[0] = 'Ataque 1';
$demihumans[17]->ataques[1] = 'Ataque 2';
$demihumans[17]->ataques[2] = 'Ataque 3';
$demihumans[17]->habili = array();
$demihumans[17]->habili[0] = 'Habilidad 1';
$demihumans[17]->habili[1] = 'Habilidad 2';
$demihumans[17]->habili[2] = 'Habilidad 3';

//Kunoichi
$demihumans[18] = new stdObject();
$demihumans[18]->nombre = 'Kunoichi';
$demihumans[18]->slug = 'demi_kunoichi';
$demihumans[18]->stats = new stdObject();
$demihumans[18]->vid = 100;
$demihumans[18]->ene = 100;
$demihumans[18]->atk = 100;
$demihumans[18]->def = 100;
$demihumans[18]->mag = 100;
$demihumans[18]->res = 100;
$demihumans[18]->acc = 100;
$demihumans[18]->vel = 100;
$demihumans[18]->ataques = array();
$demihumans[18]->ataques[0] = 'Ataque 1';
$demihumans[18]->ataques[1] = 'Ataque 2';
$demihumans[18]->ataques[2] = 'Ataque 3';
$demihumans[18]->habili = array();
$demihumans[18]->habili[0] = 'Habilidad 1';
$demihumans[18]->habili[1] = 'Habilidad 2';
$demihumans[18]->habili[2] = 'Habilidad 3';

//Majin
$demihumans[19] = new stdObject();
$demihumans[19]->nombre = 'Majin';
$demihumans[19]->slug = 'demi_majin';
$demihumans[19]->stats = new stdObject();
$demihumans[19]->vid = 100;
$demihumans[19]->ene = 100;
$demihumans[19]->atk = 100;
$demihumans[19]->def = 100;
$demihumans[19]->mag = 100;
$demihumans[19]->res = 100;
$demihumans[19]->acc = 100;
$demihumans[19]->vel = 100;
$demihumans[19]->ataques = array();
$demihumans[19]->ataques[0] = 'Ataque 1';
$demihumans[19]->ataques[1] = 'Ataque 2';
$demihumans[19]->ataques[2] = 'Ataque 3';
$demihumans[19]->habili = array();
$demihumans[19]->habili[0] = 'Habilidad 1';
$demihumans[19]->habili[1] = 'Habilidad 2';
$demihumans[19]->habili[2] = 'Habilidad 3';

//Martyr
$demihumans[20] = new stdObject();
$demihumans[20]->nombre = 'Martyr';
$demihumans[20]->slug = 'demi_martyr';
$demihumans[20]->stats = new stdObject();
$demihumans[20]->vid = 100;
$demihumans[20]->ene = 100;
$demihumans[20]->atk = 100;
$demihumans[20]->def = 100;
$demihumans[20]->mag = 100;
$demihumans[20]->res = 100;
$demihumans[20]->acc = 100;
$demihumans[20]->vel = 100;
$demihumans[20]->ataques = array();
$demihumans[20]->ataques[0] = 'Ataque 1';
$demihumans[20]->ataques[1] = 'Ataque 2';
$demihumans[20]->ataques[2] = 'Ataque 3';
$demihumans[20]->habili = array();
$demihumans[20]->habili[0] = 'Habilidad 1';
$demihumans[20]->habili[1] = 'Habilidad 2';
$demihumans[20]->habili[2] = 'Habilidad 3';

//Masked Hero
$demihumans[21] = new stdObject();
$demihumans[21]->nombre = 'Masked Hero';
$demihumans[21]->slug = 'demi_masked';
$demihumans[21]->stats = new stdObject();
$demihumans[21]->vid = 100;
$demihumans[21]->ene = 100;
$demihumans[21]->atk = 100;
$demihumans[21]->def = 100;
$demihumans[21]->mag = 100;
$demihumans[21]->res = 100;
$demihumans[21]->acc = 100;
$demihumans[21]->vel = 100;
$demihumans[21]->ataques = array();
$demihumans[21]->ataques[0] = 'Ataque 1';
$demihumans[21]->ataques[1] = 'Ataque 2';
$demihumans[21]->ataques[2] = 'Ataque 3';
$demihumans[21]->habili = array();
$demihumans[21]->habili[0] = 'Habilidad 1';
$demihumans[21]->habili[1] = 'Habilidad 2';
$demihumans[21]->habili[2] = 'Habilidad 3';

//Medic
$demihumans[22] = new stdObject();
$demihumans[22]->nombre = 'Medic';
$demihumans[22]->slug = 'demi_medic';
$demihumans[22]->stats = new stdObject();
$demihumans[22]->vid = 100;
$demihumans[22]->ene = 100;
$demihumans[22]->atk = 100;
$demihumans[22]->def = 100;
$demihumans[22]->mag = 100;
$demihumans[22]->res = 100;
$demihumans[22]->acc = 100;
$demihumans[22]->vel = 100;
$demihumans[22]->ataques = array();
$demihumans[22]->ataques[0] = 'Ataque 1';
$demihumans[22]->ataques[1] = 'Ataque 2';
$demihumans[22]->ataques[2] = 'Ataque 3';
$demihumans[22]->habili = array();
$demihumans[22]->habili[0] = 'Habilidad 1';
$demihumans[22]->habili[1] = 'Habilidad 2';
$demihumans[22]->habili[2] = 'Habilidad 3';

//Magic Knight
$demihumans[23] = new stdObject();
$demihumans[23]->nombre = 'Magic Knight';
$demihumans[23]->slug = 'demi_mknight';
$demihumans[23]->stats = new stdObject();
$demihumans[23]->vid = 100;
$demihumans[23]->ene = 100;
$demihumans[23]->atk = 100;
$demihumans[23]->def = 100;
$demihumans[23]->mag = 100;
$demihumans[23]->res = 100;
$demihumans[23]->acc = 100;
$demihumans[23]->vel = 100;
$demihumans[23]->ataques = array();
$demihumans[23]->ataques[0] = 'Ataque 1';
$demihumans[23]->ataques[1] = 'Ataque 2';
$demihumans[23]->ataques[2] = 'Ataque 3';
$demihumans[23]->habili = array();
$demihumans[23]->habili[0] = 'Habilidad 1';
$demihumans[23]->habili[1] = 'Habilidad 2';
$demihumans[23]->habili[2] = 'Habilidad 3';

//Monk
$demihumans[24] = new stdObject();
$demihumans[24]->nombre = 'Monk';
$demihumans[24]->slug = 'demi_monk';
$demihumans[24]->stats = new stdObject();
$demihumans[24]->vid = 100;
$demihumans[24]->ene = 100;
$demihumans[24]->atk = 100;
$demihumans[24]->def = 100;
$demihumans[24]->mag = 100;
$demihumans[24]->res = 100;
$demihumans[24]->acc = 100;
$demihumans[24]->vel = 100;
$demihumans[24]->ataques = array();
$demihumans[24]->ataques[0] = 'Ataque 1';
$demihumans[24]->ataques[1] = 'Ataque 2';
$demihumans[24]->ataques[2] = 'Ataque 3';
$demihumans[24]->habili = array();
$demihumans[24]->habili[0] = 'Habilidad 1';
$demihumans[24]->habili[1] = 'Habilidad 2';
$demihumans[24]->habili[2] = 'Habilidad 3';

//Ninja
$demihumans[25] = new stdObject();
$demihumans[25]->nombre = 'Ninja';
$demihumans[25]->slug = 'demi_ninja';
$demihumans[25]->stats = new stdObject();
$demihumans[25]->vid = 100;
$demihumans[25]->ene = 100;
$demihumans[25]->atk = 100;
$demihumans[25]->def = 100;
$demihumans[25]->mag = 100;
$demihumans[25]->res = 100;
$demihumans[25]->acc = 100;
$demihumans[25]->vel = 100;
$demihumans[25]->ataques = array();
$demihumans[25]->ataques[0] = 'Ataque 1';
$demihumans[25]->ataques[1] = 'Ataque 2';
$demihumans[25]->ataques[2] = 'Ataque 3';
$demihumans[25]->habili = array();
$demihumans[25]->habili[0] = 'Habilidad 1';
$demihumans[25]->habili[1] = 'Habilidad 2';
$demihumans[25]->habili[2] = 'Habilidad 3';

//Priestess
$demihumans[26] = new stdObject();
$demihumans[26]->nombre = 'Priestess';
$demihumans[26]->slug = 'demi_priestess';
$demihumans[26]->stats = new stdObject();
$demihumans[26]->vid = 100;
$demihumans[26]->ene = 100;
$demihumans[26]->atk = 100;
$demihumans[26]->def = 100;
$demihumans[26]->mag = 100;
$demihumans[26]->res = 100;
$demihumans[26]->acc = 100;
$demihumans[26]->vel = 100;
$demihumans[26]->ataques = array();
$demihumans[26]->ataques[0] = 'Ataque 1';
$demihumans[26]->ataques[1] = 'Ataque 2';
$demihumans[26]->ataques[2] = 'Ataque 3';
$demihumans[26]->habili = array();
$demihumans[26]->habili[0] = 'Habilidad 1';
$demihumans[26]->habili[1] = 'Habilidad 2';
$demihumans[26]->habili[2] = 'Habilidad 3';

//Professor
$demihumans[27] = new stdObject();
$demihumans[27]->nombre = 'Professor';
$demihumans[27]->slug = 'demi_professor';
$demihumans[27]->stats = new stdObject();
$demihumans[27]->vid = 100;
$demihumans[27]->ene = 100;
$demihumans[27]->atk = 100;
$demihumans[27]->def = 100;
$demihumans[27]->mag = 100;
$demihumans[27]->res = 100;
$demihumans[27]->acc = 100;
$demihumans[27]->vel = 100;
$demihumans[27]->ataques = array();
$demihumans[27]->ataques[0] = 'Ataque 1';
$demihumans[27]->ataques[1] = 'Ataque 2';
$demihumans[27]->ataques[2] = 'Ataque 3';
$demihumans[27]->habili = array();
$demihumans[27]->habili[0] = 'Habilidad 1';
$demihumans[27]->habili[1] = 'Habilidad 2';
$demihumans[27]->habili[2] = 'Habilidad 3';

//Ranger
$demihumans[28] = new stdObject();
$demihumans[28]->nombre = 'Ranger';
$demihumans[28]->slug = 'demi_ranger';
$demihumans[28]->stats = new stdObject();
$demihumans[28]->vid = 100;
$demihumans[28]->ene = 100;
$demihumans[28]->atk = 100;
$demihumans[28]->def = 100;
$demihumans[28]->mag = 100;
$demihumans[28]->res = 100;
$demihumans[28]->acc = 100;
$demihumans[28]->vel = 100;
$demihumans[28]->ataques = array();
$demihumans[28]->ataques[0] = 'Ataque 1';
$demihumans[28]->ataques[1] = 'Ataque 2';
$demihumans[28]->ataques[2] = 'Ataque 3';
$demihumans[28]->habili = array();
$demihumans[28]->habili[0] = 'Habilidad 1';
$demihumans[28]->habili[1] = 'Habilidad 2';
$demihumans[28]->habili[2] = 'Habilidad 3';

//Ronin
$demihumans[29] = new stdObject();
$demihumans[29]->nombre = 'Ronin';
$demihumans[29]->slug = 'demi_ronin';
$demihumans[29]->stats = new stdObject();
$demihumans[29]->vid = 100;
$demihumans[29]->ene = 100;
$demihumans[29]->atk = 100;
$demihumans[29]->def = 100;
$demihumans[29]->mag = 100;
$demihumans[29]->res = 100;
$demihumans[29]->acc = 100;
$demihumans[29]->vel = 100;
$demihumans[29]->ataques = array();
$demihumans[29]->ataques[0] = 'Ataque 1';
$demihumans[29]->ataques[1] = 'Ataque 2';
$demihumans[29]->ataques[2] = 'Ataque 3';
$demihumans[29]->habili = array();
$demihumans[29]->habili[0] = 'Habilidad 1';
$demihumans[29]->habili[1] = 'Habilidad 2';
$demihumans[29]->habili[2] = 'Habilidad 3';

//Samurai
$demihumans[30] = new stdObject();
$demihumans[30]->nombre = 'Samurai';
$demihumans[30]->slug = 'demi_samurai';
$demihumans[30]->stats = new stdObject();
$demihumans[30]->vid = 100;
$demihumans[30]->ene = 100;
$demihumans[30]->atk = 100;
$demihumans[30]->def = 100;
$demihumans[30]->mag = 100;
$demihumans[30]->res = 100;
$demihumans[30]->acc = 100;
$demihumans[30]->vel = 100;
$demihumans[30]->ataques = array();
$demihumans[30]->ataques[0] = 'Ataque 1';
$demihumans[30]->ataques[1] = 'Ataque 2';
$demihumans[30]->ataques[2] = 'Ataque 3';
$demihumans[30]->habili = array();
$demihumans[30]->habili[0] = 'Habilidad 1';
$demihumans[30]->habili[1] = 'Habilidad 2';
$demihumans[30]->habili[2] = 'Habilidad 3';

//Scout
$demihumans[31] = new stdObject();
$demihumans[31]->nombre = 'Scout';
$demihumans[31]->slug = 'demi_scout';
$demihumans[31]->stats = new stdObject();
$demihumans[31]->vid = 100;
$demihumans[31]->ene = 100;
$demihumans[31]->atk = 100;
$demihumans[31]->def = 100;
$demihumans[31]->mag = 100;
$demihumans[31]->res = 100;
$demihumans[31]->acc = 100;
$demihumans[31]->vel = 100;
$demihumans[31]->ataques = array();
$demihumans[31]->ataques[0] = 'Ataque 1';
$demihumans[31]->ataques[1] = 'Ataque 2';
$demihumans[31]->ataques[2] = 'Ataque 3';
$demihumans[31]->habili = array();
$demihumans[31]->habili[0] = 'Habilidad 1';
$demihumans[31]->habili[1] = 'Habilidad 2';
$demihumans[31]->habili[2] = 'Habilidad 3';

//Shaman
$demihumans[32] = new stdObject();
$demihumans[32]->nombre = 'Shaman';
$demihumans[32]->slug = 'demi_shaman';
$demihumans[32]->stats = new stdObject();
$demihumans[32]->vid = 100;
$demihumans[32]->ene = 100;
$demihumans[32]->atk = 100;
$demihumans[32]->def = 100;
$demihumans[32]->mag = 100;
$demihumans[32]->res = 100;
$demihumans[32]->acc = 100;
$demihumans[32]->vel = 100;
$demihumans[32]->ataques = array();
$demihumans[32]->ataques[0] = 'Ataque 1';
$demihumans[32]->ataques[1] = 'Ataque 2';
$demihumans[32]->ataques[2] = 'Ataque 3';
$demihumans[32]->habili = array();
$demihumans[32]->habili[0] = 'Habilidad 1';
$demihumans[32]->habili[1] = 'Habilidad 2';
$demihumans[32]->habili[2] = 'Habilidad 3';

//Sinner
$demihumans[33] = new stdObject();
$demihumans[33]->nombre = 'Sinner';
$demihumans[33]->slug = 'demi_sinner';
$demihumans[33]->stats = new stdObject();
$demihumans[33]->vid = 100;
$demihumans[33]->ene = 100;
$demihumans[33]->atk = 100;
$demihumans[33]->def = 100;
$demihumans[33]->mag = 100;
$demihumans[33]->res = 100;
$demihumans[33]->acc = 100;
$demihumans[33]->vel = 100;
$demihumans[33]->ataques = array();
$demihumans[33]->ataques[0] = 'Ataque 1';
$demihumans[33]->ataques[1] = 'Ataque 2';
$demihumans[33]->ataques[2] = 'Ataque 3';
$demihumans[33]->habili = array();
$demihumans[33]->habili[0] = 'Habilidad 1';
$demihumans[33]->habili[1] = 'Habilidad 2';
$demihumans[33]->habili[2] = 'Habilidad 3';

//Skull
$demihumans[34] = new stdObject();
$demihumans[34]->nombre = 'Skull';
$demihumans[34]->slug = 'demi_skull';
$demihumans[34]->stats = new stdObject();
$demihumans[34]->vid = 100;
$demihumans[34]->ene = 100;
$demihumans[34]->atk = 100;
$demihumans[34]->def = 100;
$demihumans[34]->mag = 100;
$demihumans[34]->res = 100;
$demihumans[34]->acc = 100;
$demihumans[34]->vel = 100;
$demihumans[34]->ataques = array();
$demihumans[34]->ataques[0] = 'Ataque 1';
$demihumans[34]->ataques[1] = 'Ataque 2';
$demihumans[34]->ataques[2] = 'Ataque 3';
$demihumans[34]->habili = array();
$demihumans[34]->habili[0] = 'Habilidad 1';
$demihumans[34]->habili[1] = 'Habilidad 2';
$demihumans[34]->habili[2] = 'Habilidad 3';

//Space Soldier
$demihumans[35] = new stdObject();
$demihumans[35]->nombre = 'Space Soldier';
$demihumans[35]->slug = 'demi_soldier';
$demihumans[35]->stats = new stdObject();
$demihumans[35]->vid = 100;
$demihumans[35]->ene = 100;
$demihumans[35]->atk = 100;
$demihumans[35]->def = 100;
$demihumans[35]->mag = 100;
$demihumans[35]->res = 100;
$demihumans[35]->acc = 100;
$demihumans[35]->vel = 100;
$demihumans[35]->ataques = array();
$demihumans[35]->ataques[0] = 'Ataque 1';
$demihumans[35]->ataques[1] = 'Ataque 2';
$demihumans[35]->ataques[2] = 'Ataque 3';
$demihumans[35]->habili = array();
$demihumans[35]->habili[0] = 'Habilidad 1';
$demihumans[35]->habili[1] = 'Habilidad 2';
$demihumans[35]->habili[2] = 'Habilidad 3';

//Thieft Female
$demihumans[36] = new stdObject();
$demihumans[36]->nombre = 'Thieft Female';
$demihumans[36]->slug = 'demi_thieftF';
$demihumans[36]->stats = new stdObject();
$demihumans[36]->vid = 100;
$demihumans[36]->ene = 100;
$demihumans[36]->atk = 100;
$demihumans[36]->def = 100;
$demihumans[36]->mag = 100;
$demihumans[36]->res = 100;
$demihumans[36]->acc = 100;
$demihumans[36]->vel = 100;
$demihumans[36]->ataques = array();
$demihumans[36]->ataques[0] = 'Ataque 1';
$demihumans[36]->ataques[1] = 'Ataque 2';
$demihumans[36]->ataques[2] = 'Ataque 3';
$demihumans[36]->habili = array();
$demihumans[36]->habili[0] = 'Habilidad 1';
$demihumans[36]->habili[1] = 'Habilidad 2';
$demihumans[36]->habili[2] = 'Habilidad 3';

//Thieft Male
$demihumans[37] = new stdObject();
$demihumans[37]->nombre = 'Thieft Male';
$demihumans[37]->slug = 'demi_thieftM';
$demihumans[37]->stats = new stdObject();
$demihumans[37]->vid = 100;
$demihumans[37]->ene = 100;
$demihumans[37]->atk = 100;
$demihumans[37]->def = 100;
$demihumans[37]->mag = 100;
$demihumans[37]->res = 100;
$demihumans[37]->acc = 100;
$demihumans[37]->vel = 100;
$demihumans[37]->ataques = array();
$demihumans[37]->ataques[0] = 'Ataque 1';
$demihumans[37]->ataques[1] = 'Ataque 2';
$demihumans[37]->ataques[2] = 'Ataque 3';
$demihumans[37]->habili = array();
$demihumans[37]->habili[0] = 'Habilidad 1';
$demihumans[37]->habili[1] = 'Habilidad 2';
$demihumans[37]->habili[2] = 'Habilidad 3';

//Valkyrie
$demihumans[38] = new stdObject();
$demihumans[38]->nombre = 'Valkyrie';
$demihumans[38]->slug = 'demi_valkyrie';
$demihumans[38]->stats = new stdObject();
$demihumans[38]->vid = 100;
$demihumans[38]->ene = 100;
$demihumans[38]->atk = 100;
$demihumans[38]->def = 100;
$demihumans[38]->mag = 100;
$demihumans[38]->res = 100;
$demihumans[38]->acc = 100;
$demihumans[38]->vel = 100;
$demihumans[38]->ataques = array();
$demihumans[38]->ataques[0] = 'Ataque 1';
$demihumans[38]->ataques[1] = 'Ataque 2';
$demihumans[38]->ataques[2] = 'Ataque 3';
$demihumans[38]->habili = array();
$demihumans[38]->habili[0] = 'Habilidad 1';
$demihumans[38]->habili[1] = 'Habilidad 2';
$demihumans[38]->habili[2] = 'Habilidad 3';

//Warrior
$demihumans[39] = new stdObject();
$demihumans[39]->nombre = 'Warrior';
$demihumans[39]->slug = 'demi_warrior';
$demihumans[39]->stats = new stdObject();
$demihumans[39]->vid = 100;
$demihumans[39]->ene = 100;
$demihumans[39]->atk = 100;
$demihumans[39]->def = 100;
$demihumans[39]->mag = 100;
$demihumans[39]->res = 100;
$demihumans[39]->acc = 100;
$demihumans[39]->vel = 100;
$demihumans[39]->ataques = array();
$demihumans[39]->ataques[0] = 'Ataque 1';
$demihumans[39]->ataques[1] = 'Ataque 2';
$demihumans[39]->ataques[2] = 'Ataque 3';
$demihumans[39]->habili = array();
$demihumans[39]->habili[0] = 'Habilidad 1';
$demihumans[39]->habili[1] = 'Habilidad 2';
$demihumans[39]->habili[2] = 'Habilidad 3';

//Witch
$demihumans[40] = new stdObject();
$demihumans[40]->nombre = 'Witch';
$demihumans[40]->slug = 'demi_witch';
$demihumans[40]->stats = new stdObject();
$demihumans[40]->vid = 100;
$demihumans[40]->ene = 100;
$demihumans[40]->atk = 100;
$demihumans[40]->def = 100;
$demihumans[40]->mag = 100;
$demihumans[40]->res = 100;
$demihumans[40]->acc = 100;
$demihumans[40]->vel = 100;
$demihumans[40]->ataques = array();
$demihumans[40]->ataques[0] = 'Ataque 1';
$demihumans[40]->ataques[1] = 'Ataque 2';
$demihumans[40]->ataques[2] = 'Ataque 3';
$demihumans[40]->habili = array();
$demihumans[40]->habili[0] = 'Habilidad 1';
$demihumans[40]->habili[1] = 'Habilidad 2';
$demihumans[40]->habili[2] = 'Habilidad 3';

/*- Energia : (ene * (mag/2) ) / 50-*/

error_reporting(E_ALL);
ini_set("display_errors", 1);

$ruta = '/home/julioappscofre';
set_include_path(get_include_path().PATH_SEPARATOR.$ruta);


/*----- CARGA EL ZEND LOADER -----*/
require 'Zend/Loader/Autoloader.php';
Zend_Loader_Autoloader::getInstance();


/*----- CONECTAR CON BASE DE DATOS -----*
$config	= require_once 'config/db.php';
$db		= Zend_Db::factory('Mysqli', $config);
Zend_Db_Table_Abstract::setDefaultAdapter($db);
$tablaFotos = new Zend_Db_Table('netherworld_characters');
	
foreach ($demihumans as $demi) :
	$fotoDatos = array(
		'slug'		=> $demi->slug,
		'nombre'	=> $demi->nombre,
		'vid'		=> $demi->vid,
		'ene'		=> $demi->ene,
		'atk'		=> $demi->atk,
		'def'		=> $demi->def,
		'mag'		=> $demi->mag,
		'res'		=> $demi->res,
		'spd'		=> $demi->vel,
		'acc'		=> $demi->acc,
		'ataque1'	=> 'ataque1',
		'ataque2'	=> 'ataque2',
		'ataque3'	=> 'ataque3',
		'ataque4'	=> 'ataque4',
		'habilidad'	=> 'habilidad',
	);
	$tablaFotos->insert($fotoDatos);
	echo $demi->nombre.' AGREGADO<br />';
endforeach;
/**/
?>