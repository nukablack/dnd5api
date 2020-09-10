<?php

use Illuminate\Database\Seeder;
use App\RasgoRacial;

class RasgosRacialesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RasgoRacial::create([
           'nombre' => 'Visión en la oscuridad',
           'descript' => 'Puedes ver en luz tenue a una distancia de 60 pies (18 centímetros) desde ti como si estuviera bien iluminado, y en la oscuridad como si hubiese luz tenue. No puedes discernir colores en la oscuridad, tan solo tonos de gris.'
        ]);

        RasgoRacial::create([
           'nombre' => 'Resistencia Enana',
           'descript' => 'Tienes ventaja en las tiradas de salvación contra veneno, y posees resistencia contra el daño por veneno.'
        ]);

        RasgoRacial::create([
           'nombre' => 'Entrenamiento de Combate Enano',
           'descript' => 'Eres competente con el hacha de batalla, hacha de mano, martillo arrojadizo y martillo de guerra.'
        ]);

        RasgoRacial::create([
           'nombre' => 'Competencia con Herramientas',
           'descript' => 'Ganas competencia con unas herramientas de artesano a tu elección: herramientas de herrero, materiales de cervecería o herramientas de albañil.'
        ]);

        RasgoRacial::create([
           'nombre' => 'Afinidad con la Piedra',
           'descript' => 'Cuando quiera que hagas una prueba de Inteligencia(Historia) relacionada con el origen de un trabajo hecho en piedra, eres considerado competente en la habilidad de Historia y añades el doble de tu bonificador de competencia a la tirada, en lugar de tu bonificador de competencia normal.'
        ]);

        RasgoRacial::create([
           'nombre' => 'Dureza Enana',
           'descript' => 'Tus puntos de Golpe máximos aumentan en 1, y aumentan en 1 cada vez que ganes un nivel.'
        ]);

        RasgoRacial::create([
           'nombre' => 'Entrenamiento con Armadura Enana',
           'descript' => 'Tienes competencia con las armaduras ligeras y medias.'
        ]);

        RasgoRacial::create([
           'nombre' => 'Sentidos Agudos',
           'descript' => 'Eres competente con la habilidad de Percepción'
        ]);

        RasgoRacial::create([
           'nombre' => 'Ascendencia Feérica',
           'descript' => 'Tienes ventaja en las tiradas de salvación contra Encantamiento, y no puedes ser dormido mediante magia.'
        ]);

        RasgoRacial::create([
           'nombre' => 'Trance',
           'descript' => 'Los elfos no necesitan dormir. En lugar de eso, meditan profundamente, permaneciendo semiconscientes durante 4 horas al día. (La palabra en Común para tal meditación es “trance”). Mientras meditas, puedes soñar en cierta manera; tales sueños son en realidad ejercicios mentales que se han convertido en un reflejo a lo largo de años de práctica. Tras descansar de esta manera, obtienes el mismo beneficio que un humano tras 8h de sueño.'
        ]);

        RasgoRacial::create([
           'nombre' => 'Entrenamiento en Armas Élficas',
           'descript' => 'Eres competente con la espada larga, espada corta, arco largo y arco corto.'
        ]);

        RasgoRacial::create([
           'nombre' => 'Trucos',
           'descript' => 'Conoces un truco de tu elección de la lista de conjuros de mago. La inteligencia es tu característica de lanzamiento de conjuros con él.'
        ]);

        RasgoRacial::create([
           'nombre' => 'Idioma Adicional',
           'descript' => 'Sabes hablar, leer y escribir un idioma adicional de tu elección.'
        ]);

        RasgoRacial::create([
           'nombre' => 'Ligero de Pies',
           'descript' => 'Tu velocidad base andando aumenta a 35 pies.'
        ]);

        RasgoRacial::create([
           'nombre' => 'Máscara de la Espesura',
           'descript' => 'Puedes intentar esconderte incluso cuando sólo estás ligeramente cubierto por el follaje, una lluvia fuerte, la nieve que cae, niebla y otros fenómenos naturales.'
        ]);

        RasgoRacial::create([
           'nombre' => 'Visión en la Oscuridad Mejorada',
           'descript' => 'Tu visión en la oscuridad tiene un radio de 120 pies (36,5m)'
        ]);

        RasgoRacial::create([
           'nombre' => 'Sensibilidad a la Luz del Sol',
           'descript' => 'Tienes desventaja en las tiradas de ataque y en las pruebas de Sabiduría (Percepción) basadas en la vista cuando el objetivo de tu ataque o lo que sea que intentes percibir está bajo la luz del Sol directa.'
        ]);

        RasgoRacial::create([
           'nombre' => 'Magia Drow',
           'descript' => 'Conoces el truco Luces Danzantes. Cuando alcances el tercer nivel puedes conjurar Fuego Feérico una vez por día. Cuando alcances el quinto nivel también puedes conjurar Oscuridad una vez al día. Carisma es la característica de lanzamiento de conjuros para estos hechizos.'
        ]);

        RasgoRacial::create([
           'nombre' => 'Entrenamiento en Armas Drow',
           'descript' => 'Eres competente con estoques, espadas cortas y ballestas de mano.'
        ]);

        RasgoRacial::create([
           'nombre' => 'Suertudo',
           'descript' => 'Cuando obtienes un 1 en una tirada de ataque, prueba de característica o tirada de salvación, puedes volver a tirar el dado y debes de usar la puntuación obtenida en la nueva tirada.'
        ]);

        RasgoRacial::create([
           'nombre' => 'Valiente',
           'descript' => 'Tienes ventaja en las tiradas de salvación en contra de ser asustado.'
        ]);

        RasgoRacial::create([
           'nombre' => 'Agilidad Mediana',
           'descript' => 'Puedes moverte a través del espacio de cualquier criatura que sea de un tamaño mayor que el tuyo.'
        ]);

        RasgoRacial::create([
           'nombre' => 'Sigiloso por naturaleza',
           'descript' => 'Puedes intentar esconderte incluso cuando solamente estás cubierto tras una criatura que es al menos un tamaño mayor que tú.'
        ]);

        RasgoRacial::create([
           'nombre' => 'Ascendencia Dracónica',
           'descript' => 'Tienes ascendencia dracónica. Elige un tipo de dragón de la tabla Ascendencia Dracónica. Tu arma de aliento y tu resistencia al daño están determinados por el tipo de dragón, tal como se muestra en la tabla.'
        ]);

        RasgoRacial::create([
           'nombre' => 'Arma de Aliento',
           'descript' => 'Puedes usar tu acción para exhalar energía destructiva. Tu ascendencia dracónica determina el tamaño, forma y tipo de daño de la exhalación. Cuando usas tu arma de aliento, todas las criaturas en el área de la exhalación deben hacer una tirada de salvación, el tipo de la cual está determinado por tu ascendencia dracónica. La CD para esta tirada es de 8 + tu modificador de Constitución + tu bono de competencia. Una criatura recibe 2d6 de daño si falla la tirada y la mitad de ese daño si la supera. El daño se incrementa a 3d6 a nivel 6, 4d6 a nivel 11 y 5d6 a nivel 16. Tras usar tu arma de aliento no puedes volver a usarla hasta completar un descanso corto o prolongado.'
        ]);

        RasgoRacial::create([
           'nombre' => 'Resistencia al Daño',
           'descript' => 'Tienes resistencia a un tipo de daño asociado con tu ascendencia dracónica.'
        ]);

        RasgoRacial::create([
           'nombre' => 'Astucia Gnoma',
           'descript' => 'Obtienes ventaja en todas tus tiradas de salvación de Inteligencia, Sabiduría y Carisma contra magia.'
        ]);

        RasgoRacial::create([
           'nombre' => 'Ilusionista Natural',
           'descript' => 'Conoces el truco ilusión menor. Inteligencia es tu característica para realizar el conjuro.'
        ]);

        RasgoRacial::create([
           'nombre' => 'Hablar con las Bestias Pequeñas',
           'descript' => 'A través de sonidos y gestos, puedes comunicar ideas simples a bestias Pequeñas o más pequeñas. Los gnomos de los bosques aman a los animales y frecuentemente tienen ardillas, tejones, conejos, topos, pájaros carpinteros y otras criaturas como adoradas mascotas.'
        ]);

        RasgoRacial::create([
           'nombre' => 'Conocimiento de Artífice',
           'descript' => 'Siempre que hagas una tirada de Inteligencia (Historia) relacionada con objetos mágicos, objetos alquímicos o aparatos tecnológicos, puedes añadir dos veces tu bonificación de competencia en lugar del bonificación de competencia que aplicarías normalmente.'
        ]);

        RasgoRacial::create([
           'nombre' => 'Hojalatero',
           'descript' => 'Obtienes competencia con herramientas de artesano (hojalatero). Usando estas herramientas, puedes gastar 1h y 10 po en materiales para construir un artefacto de cuerda diminuto (CA 5, 1PG). El artefacto deja de funcionar tras 24h (a no ser que dediques 1h a repararlo para mantener el artefacto en funcionamiento), o cuando usas tu acción para desmantelarlo, momento en el cual puedes recuperar los materiales que usaste para crearlo. Puedes tener hasta tres de estos artefactos activos a la vez. Cuando creas un artefacto, escoge una de las siguientes opciones: JUGUETE DE CUERDA. Este juguete es un animal, monstruo o persona de cuerda, como un ratón, un pájaro, un dragón o un soldado. Cuando se pone en el suelo, el juguete se mueve 5 pies a través del suelo en cada uno de tus turnos en una dirección aleatoria. Hace ruidos apropiados a la criatura que representa. ENCENDEDOR. El artefacto produce una llama en miniatura, que puedes usar para encender una vela, antorcha o fuego de campamento. Usar el artefacto requiere tu acción. CAJA DE MÚSICA. Cuando se abre, esta caja de música interpreta una sola canción a un volumen moderado. La caja deja de sonar cuando llega la final de la canción o cuando se cierra.'
        ]);

        RasgoRacial::create([
           'nombre' => 'Versatilidad con Habilidades',
           'descript' => 'Ganas competencia en dos habilidades a tu elección.'
        ]);

        RasgoRacial::create([
           'nombre' => 'Amenazante',
           'descript' => 'Ganas competencia en la habilidad Intimidar.'
        ]);

        RasgoRacial::create([
           'nombre' => 'Resistencia Incansable',
           'descript' => 'Cuando te ves reducido a 0 Puntos de Golpe pero no estás totalmente muerto, puedes volver a tener 1 punto de golpe en su lugar. No puedes volver a usar este rasgo hasta que no hayas completado un descanso prolongado.'
        ]);

        RasgoRacial::create([
           'nombre' => 'Ataques Salvajes',
           'descript' => 'Cuando saques un impacto crítico con un ataque con arma cuerpo a cuerpo, puedes tirar otra vez uno de los dados de daño del arma y añadirlo al daño extra por el impacto crítico.'
        ]);

        RasgoRacial::create([
           'nombre' => 'Resistencia Infernal',
           'descript' => 'Posees resistencia al daño por fuego.'
        ]);

        RasgoRacial::create([
           'nombre' => 'Legado Infernal',
           'descript' => 'Conoces el truco taumaturgia. Una vez alcances el nivel 3, puedes conjurar el truco reprensión infernal una vez al día como si fuese un conjuro de nivel 2. Una vez alcances el nivel 5, puedes lanzar también el conjuro oscuridad una vez al día. El Carisma es tu característica de lanzamiento para estos conjuros.'
        ]);
    }
}
