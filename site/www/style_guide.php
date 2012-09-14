<?php
$page_title = 'Guía de Estilo';
$page_styles = '.document { width: 80%; margin: 0 auto; }';
include('_start.php');
?>

<div role="document" class="document">
  <h1>Guía de estilo</h1>
  <p class="intro">Una guía para los estilos básicos de marcado empleados en todo el sitio.</p>
  <h2>Secciones <a href="#">Secciones enlazadas</a></h2>
  <p>El título principal de esta página es un elemento <code>h1</code>. Cualquier elemento de título puede incluir enlaces, como se muestra en el ejemplo.</p>
  <p>El encabezado secundario de arriba es un elemento <code>h2</code>, que puede usarse para encabezados a nivel de página importantes. Pueden usarse más de uno por página. Es recomendable utilizar un elemento <code>h2</code> mientras no se necesite un nivel de encabezado de menor importancia o un encabezado dentro de un elemento <code>h2</code> existente.</p>
  <h3>Encabezado de nivel 3 <a href="#">Encabezado de nivel 3 enlazado</a></h3>
  <p>El encabezado de arriba es un elemento <code>h3</code>, que puede utilizarse para cualquier encabezado a nivel de página que caiga dentro  de un encabezado de tipo <code>h2</code> en la jerarquía de un documento.</p>
  <h4>Encabezado de nivel 4 <a href="#">Encabezado de nivel 4 enlazado</a></h4>
  <p>El encabezado de arriba es un elemento <code>h4</code>, que puede utilizarse para cualquier encabezado a nivel de página que caiga dentro de un encabezado de tipo <code>h3</code> en la jerarquía de un documento.</p>
  <h5>Encabezado de nivel 5 <a href="#">Encabezado de nivel 5 enlazado</a></h5>
  <p>El encabezado de arriba es un elemento <code>h5</code>, que puede utilizarse para cualquier encabezado a nivel de página que caiga dentro de un encabezado de tipo <code>h4</code> en la jerarquía de un documento.</p>
  <h6>Encabezado de nivel 6 <a href="#">Encabezado de nivel 6 enlazado</a></h6>
  <p>El encabezado de arriba es un elemento <code>h6</code>, que puede utilizarse para cualquier encabezado a nivel de página que caiga dentro de un encabezado de tipo <code>h5</code> en la jerarquía de un documento.</p>

  <h2 id="groups">Agrupación de contenido</h2>
  <h3>Párrafos</h3>
  <p>Todos los párrafos están encerrados en etiquetas <code>p</code>. Adicionalmente, los elementos <code>p</code> pueden estar encerrados dentro de un elemento <code>blockquote</code> <em>siempre que el elemento <code>p</code> sea efectivamente una cita</em>. Históricamente, el elemento <code>blockquote</code> se ha usado meramente para forzar indentaciones, pero esto se consigue actualmente usando CSS. El elemento <code>blockquote</code> debe reservarse por tanto para las citas.</p>

  <h3>Longitud de línea</h3>
  <p>Este párrafo puede usarse como prueba p<mark>*</mark>ara <mark>*</mark>comp<mark>*</mark>robar si la longitud de <mark>*</mark>línea está dentro del rango óptimo, pues contiene cuatro asteriscos que marcan los 40, 45, 50 y 75avo caracteres, respectivamente.</p>

  <h3>Separador horizontal</h3>
  <p>El elemento <code>hr</code> representa un cambio de tema a nivel de párrafo, es decir, un cambio de escena en una historia o la transición a otro tema dentro de una sección en un manual de referencia. El siguiente extracto de <cite>Título de la cita</cite> por NombreDelAutor muestra dos párrafos que preceden a un cambio de escena, junto con el párrafo que sigue al cambio:</p>
  <div class="ejemplo">
    <p>Dudley was ninety-two, in his second life, and fast approaching time for another rejuvenation. Despite his body having the physical age of a standard fifty-year-old, the prospect of a long degrading campaign within academia was one he regarded with dread. For a supposedly advanced civilization, the Intersolar Commonwearth could be appallingly backward at times, not to mention cruel.</p>
    <p><i>Maybe it won&#8217;t be that bad</i>, he told himself. The lie was comforting enough to get him through the rest of the night&#8217;s shift.</p>
    <hr/>
    <p>The Carlton AllLander drove Dudley home just after dawn. Like the astronomer, the vehicle was old and worn, but perfectly capable of doing its job. It had a cheap diesel engine, common enough on a semi-frontier world like Gralmond, although its drive array was a thoroughly modern photoneural processor. With its high suspension and deep-tread tyres it could plough along the dirt track to the observatory in all weather and seasons, including the metre-deep snow of Gralmond&#8217;s winters.</p>
  </div>
    
  <h3>Texto con formato</h3>
  <p>El elemento <code>pre</code> representa un bloque de texto con formato, en el que la estructura está representada por convenciones tipográficas más que por sus elementos. Algunos ejemplos pueden ser un correo electrónico (con los párrafos indicados por líneas en blanco, las listas indicadas por líneas precedidas por una viñeta), fragmentos de código de programación (con la estructura indicada por las convenciones del lenguaje de programación empleado) o una pieza de arte <abbr title="American Standard Code for Information Interchange">ASCII</abbr>. Aquí se incluye un ejemplo que muestra los caracteres imprimibles del código <abbr>ASCII</abbr>:</p>
  <div class="ejemplo">
<pre><samp>  ! " # $ % &amp; ' ( ) * + , - . /
    0 1 2 3 4 5 6 7 8 9 : ; &lt; = &gt; ?
    @ A B C D E F G H I J K L M N O
    P Q R S T U V W X Y Z [ \ ] ^ _
    ` a b c d e f g h i j k l m n o
    p q r s t u v w x y z { | } ~ </samp></pre>
    </div>

  <h3>Citas</h3>
  <p>El elemento <code>blockquote</code> representa una sección que se cita desde otra fuente.</p>
  <div class="ejemplo">
    <blockquote cite="http://hansard.millbanksystems.com/commons/1947/nov/11/parliament-bill#column_206">
        <p>Many forms of Government have been tried, and will be tried in this world of sin and woe. No one pretends that democracy is perfect or all-wise. Indeed, it has been said that democracy is the worst form of government except all those other forms that have been tried from time to time.</p>
    </blockquote>
    <p>Winston Churchill, in <cite><a href="http://hansard.millbanksystems.com/commons/1947/nov/11/parliament-bill#column_206">a speech to the House of Commons</a></cite>. 11th November 1947</p>
  </div>
  <p>Adicionalmente, se puede citar también la fuente, como en el ejemplo anterior. El procedimiento correcto conlleva incluir el atributo <code>cite</code> en el elemento <code>blockquote</code>, pero puesto que ningún navegador hace uso de dicha información, es útil incluir también un enlace a la fuente.</p>

  <h3>Listas ordenadas</h3>
  <p>El elemento <code>ol</code> denota una lista ordenada, para la que pueden utilizarse varios esquemas de numeración mediante CSS (incluyendo 1,2,3&#8230; a,b,c&#8230; i,ii,iii&#8230; por ejemplo). Cada ítem requiere un par de etiquetas <code>&lt;li&gt;</code> y <code>&lt;/li&gt;</code> circundantes, para denotar los ítems individuales dentro de la lista.</p>
  <div class="ejemplo">
    <ol>
      <li>Esto es una lista ordenada.</li>
      <li>
        Este es el segundo ítem, que contiene a su vez otra lista
        <ol>
          <li>Esta es la lista dentro de la lista, que también está ordenada.</li>
          <li>Tiene dos ítems.</li>
        </ol>
      </li>
      <li>Este es el último ítem de la lista.</li>
    </ol>
  </div>

  <h3>Listas sin orden</h3>
  <p>El elemento <code>ul</code> denota una lista sin orden (es decir, una lista de ítems que no requieren un orden concreto). De nuevo, cada ítem requiere un par de etiquetas <code>&lt;li&gt;</code> y <code>&lt;/li&gt;</code> circundantes, para denotar los ítems individuales. Aquí se incluye un ejemplo que muestra las partes constituyentes de las Islas Británicas:</p>
  <div class="ejemplo">
    <ul>
      <li>
        United Kingdom of Great Britain and Northern Ireland:
        <ul>
          <li>England</li>
          <li>Scotland</li>
          <li>Wales</li>
          <li>Northern Ireland</li>
        </ul>
      </li>
      <li>Republic of Ireland</li>
      <li>Isle of Man</li>
      <li>
        Channel Islands:
        <ul>
          <li>Bailiwick of Guernsey</li>
          <li>Bailiwick of Jersey</li>
        </ul>
      </li>
    </ul>
  </div>
  <p>En ocasiones, podríamos querer incluir elementos de bloque dentro de cada ítem de la lista, típicamente un párrafo o dos.</p>
  <div class="ejemplo">
    <ul>
      <li>
        <p>The British Isles is an archipelago consisting of the two large islands of Great Britain and Ireland, and many smaller surrounding islands.</p>
      </li>
      <li>
        <p>Great Britain is the largest island of the archipelago. Ireland is the second largest island of the archipelago and lies directly to the west of Great Britain.</p>
      </li>
      <li>
        <p>The full list of islands in the British Isles includes over 1,000 islands, of which 51 have an area larger than 20 km<sup>2</sup>.</p>
      </li>
    </ul>
  </div>

  <h3>Lista de definiciones</h3>
  <p>El elemento <code>dl</code> se utiliza para otro tipo de lista llamada lista de definiciones. En lugar de ítems, el contenido de un elemento <code>dl</code> consiste en parejas de elementos <code>dt</code> (Término de la definición) y <code>dd</code> (Descripción de la definición). Aunque recibe el nombre de &#8220;lista de definiciones&#8221;, el elemento <code>dl</code> puede utilizarse en otros escenarios donde sea aplicable una relación padre/hijo. Por ejemplo, puede usarse para marcar diálogos, con un elemento <code>dt</code> para cada interlocutor y un elemento <code>dd</code> que contenga sus palabras.</p>
  <div class="ejemplo">
    <dl>
      <dt>Esto es un término.</dt>
      <dd>Esta es la definición del término anterior; término y definición están contenidas en un elemento <code>dl</code>.</dd>
      <dt>Este es otro término.</dt>
      <dd>Que tiene también su definición, en esta línea.</dd>
      <dt>Esto es un término que comparte su definición con el término que aparece justo debajo.</dt>
      <dt>Esto es otro término.</dt>
      <dd>Los términos <code>dt</code> pueden aparecer solos sin un elemento <code>dd</code> que los acompañe, pero en tal caso <em>comparten</em> su descripción con el siguiente <code>dt</code> que aparezca. No está permitido incluir un <code>dd</code> sin un elemento padre <code>dt</code>.</dd>
    </dl>
  </div>

  <h3>Figuras</h3>
  <p>Los elementos <code>figure</code> se utilizan habitualmente para hacer referencia a imágenes:</p>
  <div class="ejemplo">
    <figure>
      <img src="http://lorempixum.com/816/405/abstract/?r" alt="Example image"/>
      <figcaption>Esto es una imagen, con un pie complementario.</figcaption>
    </figure>
  </div>
  <p>Aquí, una parte de un poema ha sido marcada usando <code>figure</code>:</p>
  <div class="ejemplo">
    <figure>
      <p>&#8216;Twas brillig, and the slithy toves<br/>
      Did gyre and gimble in the wabe;<br/>
      All mimsy were the borogoves,<br/>
      And the mome raths outgrabe.</p>
      <figcaption>
        <p><cite>Jabberwocky</cite> (first verse). Lewis Carroll, 1832-98</p>
      </figcaption>
    </figure>
  </div>

  <h2 id="text">Semántica a nivel de texto</h2>
  <p>Existen ciertos elementos <abbr title="HyperText Markup Language">HTML</abbr> en línea que pueden utilizarse en cualquier lugar dentro de otros elementos.</p>

  <h3>Enlaces y puntos de ancla</h3>
  <p>El elemento <code>a</code> se utiliza para convertir un fragmento de texto en un hipervínculo, ya sea hacia otra página, un fragmento identificable de la misma página o cualquier otra ubicación en la web. Por ejemplo:</p>
  <div class="ejemplo">
    <p><a href="/">Ir a la página principal</a> o <a href="#banner">Volver al principio de esta página</a>.</p>
  </div>

  <h3>Énfasis acentuado</h3>
  <p>El elemento <code>em</code> se utiliza para denotar texto con un énfasis acentuado, es decir, algo que se pronunciaría de forma diferente. En aquellas ocasiones en las que se requiera la forma itálica para una diferenciación estilística, es preferible utilizar el elemento <code>i</code>. Por ejemplo:</p>
  <div class="ejemplo">
    <p>¡<em>Debes</em> probar el sushi!</p>
  </div>

  <h3>Importancia destacada</h3>
  <p>El elemento <code>strong</code> se utiliza para denotar texto que tiene una importancia destacada. En aquellas situaciones en las que se requiera el estilo en negrita para una diferenciación estilística, es preferible utilizar el elemento <code>b</code>. Por ejemplo:</p> 
  <div class="ejemplo">
    <p><strong>No</strong> se te ocurra meter los dedos en el enchufe.</p>
  </div>

  <h3>La letra pequeña</h3>
  <p>El elemento <small>small</small> se utiliza para representar descargos de responsabilidad, avisos, condiciones, restricciones legales o derechos de autor (conocidos comúnmente por &#8216;la letra pequeña&#8217;). También puede utilizarse para menciones, créditos o para satisfacer requisitos de licencia. Por ejemplo:</p>
  <div class="ejemplo">
    <p><small>Copyright &#169; 1922-2011 T.I.A. Todos los derechos reservados.</small></p>
  </div>

  <h3>Tachado</h3>
  <p>El elemento <code>s</code> se utiliza para representar contenido que ha dejado de ser correcto o relevante. Para indicar las correcciones en un documento, es decir, indicar que un fragmento de texto ha sido eliminado de un documento, debe utilizarse en su lugar el elemento <code>del</code>. Por ejemplo:</p>
  <div class="ejemplo">
    <p><s>Precio de venta recomendado: 3.99€ cada botella</s><br/><strong>¡Ahora solo 2.99€ la botella!</strong></p>
  </div>

  <h3>Citas</h3>
  <p>El elemento <code>cite</code> se utiliza para representar el título de una obra (un libro, un ensayo, un poema, una canción, una película, una serie de televisión, una escultura, una pintura, un musical, una exposición, etc). Puede tratarse de una obra que se está citando o referenciando en detalle (es decir, una cita), o puede ser simplemente una obra que se menciona de pasada. Por ejemplo:</p>
  <div class="ejemplo">
    <p><cite>Declaración Universal de los Derechos Humanos</cite>, Naciones Unidas, Diciembre 1948. Adoptada por la resolución 217 A (III) de la Asamblea General.</p>
  </div>

  <h3>Citas en línea</h3>
  <p>El elemento <code>q</code> se utiliza para citar fragmentos de texto en línea (es decir, dentro de párrafos u otros bloques de texto). Las comillas de apertura y cierre se insertan automáticamente mediante <abbr title="Cascading Style Sheet">CSS</abbr>, aunque este comportamiento <a href="http://www.alistapart.com/articles/qtag/" target="_blank">parece no funcionar</a> en versiones antiguas de Internet Explorer para Windows. Un ejemplo que muestra citas anidadas:</p>
  <div class="ejemplo">
    <p>John said, <q>I saw Lucy at lunch, she told me &ldquo;<q>Mary wants you to get some ice cream on your way home. I think I will get some at Ben and Jerry&#8217;s, on Gloucester Road.</q>&rdquo;</p>
  </div>

  <h3>Definiciones</h3>
  <p>El elemento <code>dfn</code> se utiliza para destacar la primera utilización de un término. El atributo <code>title</code> puede usarse para describir el término. Por ejemplo:</p>
  <div class="ejemplo">
    <p>Bob&#8217;s <dfn title="Dog">canine</dfn> mother and <dfn title="Horse">equine</dfn> father sat him down and carefully explained that he was an <dfn title="A mutation that combines two or more sets of chromosomes from different species">allopolyploid</dfn> organism.</p>
  </div>

  <h3>Abreviaturas</h3>
  <p>El elemento <code>abbr</code> se utiliza para cualquier texto abreviado, ya sea un acrónimo, unas iniciales o cualquier otro tipo de abreviatura. Por lo general, se suele marcar únicamente la primera ocurrencia de una determinada abreviatura en la página, ignorando el resto, ya que requiere menos esfuerzo y es lo suficientemente útil. El texto que se incluye en el atributo <code>title</code> aparecerá cuando el usuario coloca el cursor encima de la abreviatura (aunque, en particular, esto no funciona en Internet Explorer para Windows). Por ejemplo:</p>
  <div class="ejemplo">
    <p><abbr title="British Broadcasting Corportation">BBC</abbr>, <abbr title="HyperText Markup Language">HTML</abbr>, y <abbr title="Staffordshire">Staffs.</abbr></p>
  </div>

  <h3>Tiempo</h3>
  <p>El elemento <code>time</code> se utiliza para representar bien una hora en un reloj con formato de 24 horas, o bien una fecha precisa en el calendario Gregoriano, inclyendo opcionalmente una hora y un desfase por zona horaria. Por ejemplo:</p>
  <div class="ejemplo">
    <p>Queen Elizabeth II was proclaimed sovereign of each of the Commonwealth realms on <time datetime="1952-02-6">6</time> and <time datetime="1952-02-7">7 February 1952</time>, after the death of her father, King George VI.</p>
  </div>

  <h3>Código</h3>
  <p>El elemento <code>code</code> se utiliza para representar fragmentos de código informático. Es útil para sitios web orientados a la tecnología, no tanto para los que no lo son. Por ejemplo:</p>
  <div class="ejemplo">
    <p>Cuando llamas al método <code>activate()</code> del objeto <code>robotSnowman</code>, sus ojos se iluminan.</p>
  </div>
  <p>Suele utilizarse junto con el elemento <code>pre</code>. Por ejemplo:</p>
  <div class="ejemplo">
<pre><code>function getJelly() {
&#160;&#160;&#160;&#160;echo $aDeliciousSnack;
}</code></pre>
  </div>

  <h3>Variables</h3>
  <p>El elemento <code>var</code> se utiliza para denotar una variable en una expresión matemática o un contexto de programación, pero puede usarse también para indicar un contenedor cuyo contenido deben ser reemplazados con valores proporcionados por el propio usuario. Por ejemplo:</p>
  <div class="ejemplo">
  <p>If there are <var>n</var> pipes leading to the ice cream factory then I expect at <em>least</em> <var>n</var> flavours of ice cream to be available for purchase!</p>
  </div>

  <h3>Salida de muestra</h3>
  <p>El elemento <code>samp</code> se utiliza para representar fragmentos de muestra de la salida de un programa o sistema informático. Es útil para sitios web orientados a la tecnología, no tanto para los que no lo son. Por ejemplo:</p>
  <div class="ejemplo">
    <p>The computer said <samp>Too much cheese in tray two</samp> but I didn&#8217;t know what that meant.</p>
  </div>

  <h3>Entrada de teclado</h3>
  <p>El elemento <code>kbd</code> se utiliza para denotar una entrada por parte del usuario (típicamente desde teclado, aunque también podría usarse para representar otras vías de entrada, como comandos de voz). Por ejemplo:<p>
  <div class="ejemplo">
    <p>Para realizar una captura de pantalla en tu Mac, pulsa <kbd>&#8984; Cmd</kbd> + <kbd>&#8679; Shift</kbd> + <kbd>3</kbd>.</p>
  </div>

  <h3>Superíndices y Subíndices</h3>
  <p>El elemento <code>sup</code> representa un superíndice, mientras que el elemento <code>sub</code> representa un subíndice. Estos elementos deben usarse únicamente para marcar convenciones tipográficas con un significado específico, no por cuestiones de presentación. Como guía, estos elementos solo deben usarse si su ausencia cambiaría el significado del contenido. Por ejemplo:</p>
  <div class="ejemplo">
    <p>The coordinate of the <var>i</var>th point is (<var>x<sub><var>i</var></sub></var>, <var>y<sub><var>i</var></sub></var>). For example, the 10th point has coordinate (<var>x<sub>10</sub></var>, <var>y<sub>10</sub></var>).</p>
    <p>f(<var>x</var>, <var>n</var>) = log<sub>4</sub><var>x</var><sup><var>n</var></sup></p>
  </div>

  <h3>Itálica</h3>
  <p>El elemento <code>i</code> se utiliza para texto con una voz o un modo diferentes al de la prosa normal. Algunos ejemplos pueden ser designaciones taxonómicas, términos técnicos, frases idiomáticas de otro idioma, el nombre de un barco u otros fragmentos de texto cuya representación tipográfica es habitualmente la itálica. Por ejemplo:</p>
  <div class="ejemplo">
    <p>Hay un cierto <i lang="fr">je ne sais quoi</i> en el aire.</p>
  </div>

  <h3>Negrita</h3>
  <p>El elemento <code>b</code> se utiliza para fragmentos de texto que se quiere diferenciar estilístamente de la prosa normal sin atribuirle una importancia extra, tales como palabras clave en la sinopsis de un documento, nombres de productos en un análisis, u otros fragmentos de texto cuya representación tipográfica es habitualmente la negrita. Por ejemplo:</p>
  <div class="ejemplo">
    <p>You enter a small room. Your <b>sword</b> glows brighter. A <b>rat</b> scurries past the corner wall.</p>
  </div>

  <h3>Texto resaltado</h3>
  <p>El elemento <code>mark</code> se utiliza para representar una línea de texto marcada o resaltada por motivos de referencia. Cuando se usa en una cita, indica un resaltado que no está presente en el original pero que se ha añadido para atraer la atención del lector a esa parte del texto. Cuando se utiliza en la prosa principal de un documento, indica una parte del documento que se ha resaltado por su importancia para la actividad actual del usuario. Por ejemplo:</p>
  <div class="ejemplo">
    <p>I also have some <mark>kitten</mark>s who are visiting me these days. They&#8217;re really cute. I think they like my garden! Maybe I should adopt a <mark>kitten</mark>.</p>
  </div>

  <h3 id="edits">Correcciones</h3>
  <p>El elemento <code>del</code> se utiliza para representar texto que se ha eliminado o retirado pero que debe permanecer aún en la página por alguna razón. Por otro lado, su elemento equivalente <code>ins</code> se utiliza para representar texto que se ha insertado en el documento. Tanto <code>del</code> como <code>ins</code> poseen un atributo <code>datetime</code> que permite incluir una marca de tiempo directamente en el elemento. Un ejemplo de texto insertadoy su uso:</p>
  <div class="ejemplo">
    <p>Compró <del datetime="2005-05-30T13:00:00">dos</del> <ins datetime="2005-05-30T13:00:00">cinco</ins> pares de zapatos.</p>
  </div>

  <h2 id="tables">Tablas</h2>
  <p>Las tablas deben utilizarse cuando se quieren mostrar datos organizados en filas y columnas. Los elementos <code>thead</code>, <code>tfoot</code> y <code>tbody</code> permiten agrupar filas dentro de cada tabla.</p>
  <p>Si se utiliza alguno de estos elementos, deben utilizarse todos. Deben aparecer además en el siguiente orden: <code>thead</code>, <code>tfoot</code> y <code>tbody</code>, de manera que los navegadores puedan mostrar el pie de la tabla antes de recibir todos los datos. Estos elementos deben utilizarse dentro del elemento <code>table</code>.</p>
  <div class="ejemplo">
    <table>
      <caption>The Very Best Eggnog</caption>
      <colgroup>
        <col style="width:50%" />
        <col style="width:25%" />
        <col style="width:25%" />
      </colgroup>
      <thead>
        <tr>
          <th scope="col">Ingredients</th>
          <th scope="col">Serves 12</th>
          <th scope="col">Serves 24</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Milk</td>
          <td>1 quart</td>
          <td>2 quart</td>
        </tr>
        <tr>
          <td>Cinnamon Sticks</td>
          <td>2</td>
          <td>1</td>
        </tr>
        <tr>
          <td>Vanilla Bean, Split</td>
          <td>1</td>
          <td>2</td>
        </tr>
        <tr>
          <td>Cloves</td>
          <td>5</td>
          <td>10</td>
        </tr>
        <tr>
          <td>Mace</td>
          <td>10 blades</td>
          <td>20 blades</td>
        </tr>
        <tr>
          <td>Egg Yolks</td>
          <td>12</td>
          <td>24</td>
        </tr>
        <tr>
          <td>Cups Sugar</td>
          <td>1 &frac12; cups</td>
          <td>3 cups</td>
        </tr>
        <tr>
          <td>Dark Rum</td>
          <td>1 &frac12; cups</td>
          <td>3 cups</td>
        </tr>
        <tr>
          <td>Brandy</td>
          <td>1 &frac12; cups</td>
          <td>3 cups</td>
        </tr>
        <tr>
          <td>Vanilla</td>
          <td>1 tbsp</td>
          <td>2 tbsp</td>
        </tr>
        <tr>
          <td>Half-and-half or Light Cream</td>
          <td>1 quart</td>
          <td>2 quart</td>
        </tr>
        <tr>
          <td>Freshly grated nutmeg to taste</td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>

  <h2 id="forms">Formularios</h2>
  <p>Los formularios pueden utilizarse cuando se desea recopilar datos de los usuarios. El elemento <code>fieldset</code> permite agrupar campos relacionados dentro de un formulario, y cada uno debería contener un elemento <code>legend</code> correspondiente. El elemento <code>label</code> asegura que las descripciones de los campos están asociadas con sus controles correspondientes en el formulario.</p>
  <div class="ejemplo">
    <form action="#">
      <fieldset>
        <legend>Leyenda</legend>
        <div>
          <label for="text">Entrada de Texto <abbr title="Required">*</abbr></label>
          <input id="text" class="text" type="text"/>
          <em>Nota sobre este campo</em>
        </div>
        <div>
          <label for="password">Contraseña</label>
          <input id="password" class="text" type="password"/>
          <em>Nota sobre este campo</em>
        </div>
        <div>
          <label for="password">Dirección Web</label>
          <input id="password" class="text" type="url"/>
          <em>Nota sobre este campo</em>
        </div>
        <div>
          <label for="password">Dirección de Correo Electrónico</label>
          <input id="password" class="text" type="email"/>
          <em>Nota sobre este campo</em>
        </div>
        <div>
          <label for="textarea">Área de Texto</label>
          <textarea id="textarea" class="text" rows="8" cols="48"></textarea>
          <em class="clear">Nota sobre este campo</em>
        </div>
        <div>
          <label for="checkbox">Casilla Individual (<i>Single Checkbox</i>)</label>
          <label for="checkbox" class="check"><input id="checkbox" type="checkbox" class="checkbox"/> Etiqueta</label>
        </div>
        <div>
          <label for="select">Selección Desplegable (<i>Select</i>)</label>
          <select id="select">
            <optgroup label="Option Group">
              <option>Primera opción</option>
              <option>Segunda opción</option>
              <option>Tercera opción</option>
            </optgroup>
          </select>
          <em>Nota sobre esta selección</em>
        </div>
        <fieldset class="options">
          <legend>Múltiples Opciones (<i>Checkbox</i>) <abbr title="Required">*</abbr></legend>
          <ul>
            <li><label for="checkbox1"><input id="checkbox1" name="checkbox" type="checkbox" checked="checked" /> Opción A</label></li>
            <li><label for="checkbox2"><input id="checkbox2" name="checkbox" type="checkbox" /> Opción B</label></li>
            <li><label for="checkbox3"><input id="checkbox3" name="checkbox" type="checkbox" /> Opción C</label></li>
          </ul>
        </fieldset>
        <fieldset class="options">
          <legend>Opciones mutuamente excluyentes (<i>Radio</i>)</legend>
          <ul>
            <li><label for="radio1"><input id="radio1" name="radio" type="radio" class="radio" checked="checked" /> Opción 1</label></li>
            <li><label for="radio2"><input id="radio2" name="radio" type="radio" class="radio" /> Opción 2</label></li>
          </ul>
        </fieldset>
        <div class="submit">
          <input type="submit" value="Añadir Comentario" />
          <input type="button" value="Previsualizar" />
          <a href="#">Cancelar</a>
        </div>
      </fieldset>
    </form>
  </div>
</div>

<?php
include('_end.php');
?>