<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Curso\Post;

class PostTableSeeder extends Seeder{
  public function run(){
  Post::create(
  [
    'title' => 'My Xena Post',
    'content' => 'Xena: Warrior Princess was an Emmy Award-winnning television series which aired from September 4th, 1995 to June 18th, 2001. It was a spin-off from Hercules: The Legendary Journeys, as well as was created by the executives of Renaissance Pictures, Robert Tapert and Sam Raimi. They both became the Executive Producers, along with R. J. Stewart, who was credited as having developed it, as well as John Schulian, credited as one of two people who created it, with Tapert being the other. It did, however, eventually outlive its parent show, running for a year longer.

The series depicts Kiwi actress Lucy Lawless as Xena the Warrior Princess, an ex-warlord who realises the error of her ways and fights for the Greater Good. Accompanying her is Gabrielle (played by Texan actress Renee OConnor), a bard and later Amazon Queen, who is Xenas Best Friend and later Xenas lover and soul mate. They mainly travel through Greece, although venture into ancient versions of Italy, China, England, Japan, Siberia, Norway, India and Mauretania.

The show is heavily influenced by religious, mythological and spiritual factors. It primarily focus on the beliefs and tales from ancient Greek and the Roman Empire, while some episodes focus on religions such as Christianity, Hinduism and Norse paganism. It features many historical and mythological figures, such as Julius Caesar, Ares, Odin and his Valkyrie and Lucifer.

The crew that worked on the show were ever-changing. Some of the crew stayed from beginning to end, but others left mid-way through to work on The Lord of the Rings. There was no set director, writer or producer, although a few of the crew members from these fields did work on numerous episodes. The show has won 5 ASCAP Awards, an Emmy Award and have been nominated for many more: Joseph LoDuca has been nominated several times for his musical writing and composing.',
    'tags' => 'Laravel,blog,paisaje',
    'photo' => 'https://brendarocha26.files.wordpress.com/2015/02/paisajes-naturales.jpg'
  ]
);
  Post::create(
  [
    'title' => 'Mi second Xena post',
    'content' => 'As Xena and Gabrielle continue their adventure fighting for the Greater Good, they are faced with a horrifying God, The Dark Lord, Dahak, who is attempting to take over and dominate the Earth. Xena and Gabrielle head to Brittania, where they help Boadicea to defeat an invading Julius Caesar. However, Gabrielle is attacked and raped by Dahak and impregnated with his child. Gabrielle gives birth to the child in a matter of days and names her Hope. Xena, unconvinced of the childs innocence tries to convince Gabrielle that the baby must die, which in turn forces Gabrielle into betraying Xena and faking the death of the baby.

Gabrielle Xena Sacrifice
Gabrielle and Xena in season threes Sacrifice I
After travelling to Chin to bring down Ming Tien, the tyranted Emperor son of Lao Ma (Xenas ex-mentor), foiling an attempt on Cleopatras life by one of Joxers triplet brothers, Jett, as well as inadvertantly causing chaos with an Enchanted Scroll, Gabrielle and Xenas relationship reaches a breaking point, when Hope returns and releases Callisto from the lava pit and kills Solan, Xenas son. However, from the other side, Solan fixes their friendship, when he takes the two to a land known as Illusia.

They continue to work together, stopping the Persian Army, travelling to Rome to save Vercinix of Gaul (which kills Crassus and sparks a number of civil wars between Julius Caesar and Pompey, setting events in motion for the downfall of the Roman Republic) and escaping from a sunken ship (with help from Autolycus). Dahak makes one more attempt at taking over the Earth, when Hope and Callisto return, which means trouble for Gabrielle when she and her daughter seemingly perish in a lava pit...',
    'tags' => 'Atom,prueba,paisajes',
    'photo' => 'https://duodingo.net/images/imagenes_usuarios/12/55ab710a4e8a9.jpg'
    ]
);
Post::create(
[
  'title' => 'Xena Warrior Post',
  'content' => 'Como serie que transcurre en la Grecia antigua, hay muchos ejemplos de caligrafía griega en ella; por ejemplo, en los pergaminos de Gabrielle del episodio The Quill Is Mightier... (La pluma es más poderosa en España y La pluma encantada en Hispanoamérica). El episodio A Day in the Life (Un día cualquiera en España y Un día en la vida en Hispanoamérica) está dividido en capítulos cuyos títulos aparecen en pantalla escritos en griego antiguo como, por ejemplo, συμφωνώντας (Despertando).',
  'tags' => 'Lucy,Lawless,Xena',
  'photo' => 'http://www.nocturnar.com/comunidad/attachments/paisajes-de-i-jpg.28565/'
]
);
Post::create(
[
  'title' => 'Mi Xena Post',
  'content' => 'La serie toma libremente nombres y temas de varias mitologías de todo el mundo, principalmente de la
  griega, adaptándolos para satisfacer las demandas de la trama.15 5 Los personajes y acontecimientos históricos de
  diferentes etapas históricas y mitos hacen numerosas apariciones y a menudo se atribuye el mérito de resolver
  importantes conflictos históricos a los personajes principales. Por ejemplo, en la serie aparecen un encuentro con
   Homero antes de que fuera famoso, a quien Gabrielle anima a narrar historias; la caída de Troya; la captura de
   Julio César por piratas, con Xena como líder y la caja de Pandora. Esta extraña mezcla de eras y fusión de elementos
    históricos y míticos alimentó el ascenso del programa hasta ser considerado como serie de culto durante los años 90
    y principios de los años 2000.6 7 La serie comenzó a tener un nutrido grupo de seguidores de todo el mundo que,
   a través de Internet, debatían y opinaban sobre la serie. Aún hoy en día, la serie sigue conservando muchos fans.19
La serie es una mezcla de estilos que oscila entre el melodrama, la comedia slapstick, la acción total o la aventura.1 2 Aunque la historia transcurre en épocas antiguas, los temas del programa son básicamente contemporáneos: el responsabilizarse de los errores del pasado, el valor de la vida, la libertad, el sacrificio y la amistad. El flexible marco fantástico de la serie permite un amplio espectro de estilos. Un ejemplo de ello es el original episodio musical, The Bitter Suite (traducido como Una suite amarga en España y como Amargura en Hispanoamérica). Aunque la serie a veces trata dilemas éticos como la moralidad del pacifismo, la trama rara vez intenta proporcionar soluciones inequívocas.',
  'tags' => 'Xena,prueba,paisajes',
  'photo' => 'http://www.tustemasparawindows.com/imagenes/fondo4.jpg'
  ]
);
Post::create(
[
  'title' => 'Mi Xena Post',
  'content' => 'Xena: la princesa guerrera fue influida por muchos factores, culturas y épocas.
   Uno de los modelos más usados eran las películas de acción de Hong Kong. Los saltos acrobáticos,
   la exhalación de fuego y los sonidos de las armas en las batallas fueron algunas de las cosas que
   proceden de dichas películas.72 La escena del linchamiento de Xena en el episodio The Gauntlet, de la serie
   Hercules: The Legendary Journeys (traducido como El desafío en España y como El guante en Hispanoamérica)
   es casi idéntica a otra de la película La novia del cabello blanco.73 Lo mismo ocurre con la lucha sobre las
    escaleras de mano con Callisto en el episodio Callisto (Calisto en España y Callisto en Hispanoamérica),
    muy parecida a otra de la película Érase una vez en China 74 y la lucha contra Draco sobre las cabezas de
    aldeanos durante el episodio Sins of the Past (Pecados del pasado en España e Hispanoamérica), idéntica a una
     escena de la película Fong Sai Yuk.75 También cabe mencionar la escena del boca a boca bajo el agua perteneciente
      al episodio The Debt: Part 1 (La deuda 1 en español), influenciada por otra de la película A Chinese Ghost Story
       (Una historia china de fantasmas en España e Historias chinas de fantasmas en Argentina).',
  'tags' => 'Xena,prueba,paisajes',
  'photo' => 'http://www.tustemasparawindows.com/imagenes/fondo4.jpg'
  ]
);

  }
}
