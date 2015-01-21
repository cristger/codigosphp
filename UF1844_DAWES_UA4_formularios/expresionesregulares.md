Las expresiones regulares en Notepad ++:

Este concepto es un libro de mil páginas por sí mismo. Su origen es de Perl, pero hoy en día casi todos los lenguajes de programación tienen este tipo de funcionalidad (manipulación de texto avanzado). Para "buscar, encontrar y reemplazar, eliminar" la funcionalidad básica es más probable más que adecuada (se accede a través de CTRL + H) el básico reemplazar-UI. Sin embargo, coinciden con los criterios avanzados sólo pueden lograrse con los caracteres de expresiones regulares. La siguiente tabla presenta algunos de ellos con ejemplos prácticos. Pero antes de empezar, asegúrese de que cambia el  modo de búsqueda  de Normal a la expresión regular en la reemplace-UI (CTRL + H).

El significado de la expresión regular en Notepad ++
[]	Los corchetes se pueden utilizar para que coincida con uno de los múltiples personajes. Por ejemplo,  [abc]  coincide con cualquiera de los caracteres a, b o c. Por lo tanto, gra [ae] y coincidirá con palabras como graey y graay, pero no graaet o juegos. Gamas también se pueden utilizar, [az] es cualquier carácter en minúsculas y así sucesivamente.
()	Los corchetes se pueden utilizar para - grupo- uno de los múltiples caracteres. Por ejemplo, la frase " Estamos tan acostumbrados a ser los grandes. "Si usted escribe (utilizado) en la búsqueda y xyz en el "Reemplazar con" presentada, el resultado será " Estamos tan xyz de ser el muchachos grandes. "
+	El signo más coincide con 1 o más veces. Por ejemplo, Helo + s partidos Heloos, Helooos, Heloooooos etc.
*	El asterisco o estrella signo coincide con 0 o más veces. Por ejemplo, Ma * m coincide Mm, Mam, Maaam etc.
\D	Coincide con cualquier dígito.
\s	Coincide con espacios en blanco, incluyendo pestañas y saltos de línea.
\<	Coincide con el comienzo de una palabra. Por ejemplo, \ <ser  partidos dormitorio , pero no coincide con el cubo  .
\>	Coincide con el final de una palabra. Por ejemplo,   ser \> partidos cubo, pero no coincide con la cama .
\	La barra invertida es para escapar caracteres especiales. Por ejemplo 4 \ * 3 = 12. Ver arriba, culo el asterisco tiene en realidad otro significado.
\s	Resultados: blanco-espacio, tabulador o salto de línea.
 . 	El punto coincide con cualquier carácter.
$	El signo del dólar coincide con el final de una línea
 ^	Tenga cuidado con este símbolo, el símbolo de intercalación. Su uso normal es para que coincida con el comienzo de una línea. Si se usa dentro de los corchetes entonces excluir caracteres. Por ejemplo  [^ A-Za-z] digitales que excluirá todos los caracteres alfabéticos (mayúsculas y minúsculas) desde el principio de la palabra digital. La palabra puede ser 2DIGITAL, y digital, digital / ...... etc ....