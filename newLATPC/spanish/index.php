<?php
include_once('../code/functions.php');
$obj = new es_directory2();
    $page = new page_content();
include ('../code/html_structure/page.php');
class page_content    {
   /* public $a;
        function __construct (){
        
            $this->a='
<article>
<h1>Yay! Algun contenido.</h1>
    <section>
        <p>En este momento, creo haber decidido la estructura de la página. Como ejemplo, puedo mencionar el índice de la página principal.</p>
        <p>El índice consiste en llamar a dos archivos: "funciones" y "estructura html".</p>
        <p>Después, el archivo de funciones llama a una clase para que pueda ser utilizada. El siguiente elemento es la página principal, que también es el último elemento del archivo.</p>
        <p>El archivo "estructura html" hace uso del contenido del índice.</p>
        <p>Cada página adicional sigue el mismo patrón. El archivo de funciones contiene tres estructuras debido al idioma, así como a la estructura de los directorios de la página.</p>
    </section>
<footer>
Mon April 1st. 2024
</footer>
</article>';*/
        
        function content ()    {
            echo '<article>
            <h1>Yay! Algun contenido.</h1>
                <section>
                    <p>En este momento, creo haber decidido la estructura de la página. Como ejemplo, puedo mencionar el índice de la página principal.</p>
                    <p>El índice consiste en llamar a dos archivos: "funciones" y "estructura html".</p>
                    <p>Después, el archivo de funciones llama a una clase para que pueda ser utilizada. El siguiente elemento es la página principal, que también es el último elemento del archivo.</p>
                    <p>El archivo "estructura html" hace uso del contenido del índice.</p>
                    <p>Cada página adicional sigue el mismo patrón. El archivo de funciones contiene tres estructuras debido al idioma, así como a la estructura de los directorios de la página.</p>
                </section>
            <footer>
            Mon April 1st. 2024
            </footer>
            </article>';
            
        }
}
titles();
echo " ESTA AFUERA DEL ARTICLE ";
?>