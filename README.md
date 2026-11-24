# Manos de Yucatán

Prototipo académico de un directorio de micro y pequeños prestadores de servicios en Yucatán. HTML, CSS y JavaScript sin frameworks, instalación ni base de datos.

## Abrir la demostración

Descomprime el ZIP y abre `index.html` con Chrome, Edge o Firefox actualizado. Para un origen local estable, utiliza Live Server de VS Code, o ejecuta desde esta carpeta:

```sh
php -S localhost:8000
```

Después abre http://localhost:8000/index.html. También existe `index.php`, una entrada PHP opcional que muestra el mismo prototipo. No implementa un backend de autenticación.

## Publicar en GitHub Pages

1. Crea un repositorio en tu cuenta de GitHub.
2. Sube el CONTENIDO de esta carpeta: `index.html`, `assets/`, `README.md`, `.nojekyll` e `index.php` opcional. `index.html` debe quedar directamente en la raíz del repositorio, no dentro de otra carpeta.
3. Abre **Settings > Pages**.
4. En **Build and deployment**, selecciona **Deploy from a branch**.
5. Elige la rama **main**, carpeta **/(root)** y pulsa **Save**.
6. Espera a que GitHub termine la publicación y abre la URL que muestra Pages.

GitHub Pages no ejecuta PHP ni Java. El comportamiento de este sitio está implementado en JavaScript, un lenguaje diferente de Java. La navegación utiliza fragmentos (`#directorio`, `#perfil`, etc.) para que los enlaces y la recarga funcionen sin reglas de servidor y dentro del subdirectorio de un repositorio.

Documentación: https://docs.github.com/en/pages/getting-started-with-github-pages/creating-a-github-pages-site

## Cuentas de ejemplo

| Tipo | Correo | Contraseña |
| --- | --- | --- |
| Cliente | cliente@demo.test | Demo2026! |
| Prestador | prestador@demo.test | Demo2026! |

Selecciona la pestaña correcta: **Busco servicios** o **Ofrezco servicios**. El botón “Rellenar cuenta de ejemplo” completa el formulario; pulsa “Entrar”. También puedes registrar nuevas cuentas con correos ficticios.

## Módulos incluidos

- Inicio con búsqueda, categorías y servicios destacados.
- Directorio con ocho perfiles ficticios, filtros por oficio y municipio, búsqueda que ignora acentos y ordenamiento.
- Seis categorías: carpintería, electricidad, herrería, soldadura, plomería y pintura.
- Perfil de cada servicio con fotografía ilustrativa, presentación, zona, experiencia, especialidades y precios de ejemplo.
- Mapa esquemático interactivo de seis municipios. Mapa real opcional de OpenStreetMap; requiere internet y puede estar sujeto a disponibilidad del servicio externo.
- Registro e inicio de sesión diferenciados por rol, validación y cierre de sesión.
- Perfil del usuario editable, favoritos y solicitudes de cotización simuladas.
- Panel del prestador para crear o editar su servicio y actualizar el estado de solicitudes.
- Ayuda, explicación de la demo y botón para restablecer datos.
- Diseño adaptable mediante CSS para escritorio y móvil.

## Guion sugerido para exponer

1. Busca “carpinteria” y muestra que aparecen dos servicios, incluso sin escribir acento.
2. Inicia sesión como cliente y abre Carpintería Dzidzilché.
3. Guarda el servicio en favoritos y solicita una cotización de prueba.
4. Abre Mis solicitudes para mostrar la solicitud pendiente.
5. Cierra sesión desde Mi perfil e inicia como prestador en EL MISMO navegador y origen.
6. Abre Mis solicitudes: verás la consulta recibida. Cambia su estado a “En conversación”.
7. En Mi servicio, modifica el precio o la presentación y guarda. Abre el perfil público para ver el resultado.
8. Prueba el mapa y cambia de municipio.
9. Registra otro prestador con datos ficticios, completa su servicio y comprueba que aparece en el directorio.

Solo la primera empresa está vinculada a la cuenta de prestador precargada. Las solicitudes dirigidas a otros servicios quedan en la vista del cliente; para demostrar recepción, usa Carpintería Dzidzilché o un servicio creado por una nueva cuenta.

## Persistencia y límites

La clave `manos-yucatan-v1` de localStorage conserva usuarios, servicios, favoritos, solicitudes y sesión. Los datos no salen del navegador, no se comparten con otros visitantes y pueden borrarse al limpiar datos del sitio. Abrir la versión local y la publicada crea demostraciones independientes. Usa el mismo navegador y origen para mostrar el intercambio entre cuentas.

Esto es autenticación SIMULADA, no apta para uso real: cualquier persona con acceso al navegador puede modificar localStorage. Las cuentas nuevas guardan un resumen SHA-256 con sal, no la contraseña literal; esto no convierte el almacenamiento del navegador en un sistema de autenticación seguro. Las cuentas precargadas usan una contraseña pública de demostración. No uses datos personales ni contraseñas reales. Para un producto real se necesita backend, autenticación de servidor y almacenamiento adecuado.

Las operaciones requieren almacenamiento local disponible. Registro y nuevas solicitudes utilizan Web Crypto: usa un navegador moderno con HTTPS (GitHub Pages) o localhost. Si tu navegador restringe `file://`, abre con Live Server o PHP local.

No se envían correos, mensajes, pagos ni cotizaciones reales. Los horarios, reseñas, nombres y precios son ficticios. Las imágenes ilustran oficios, no identidades verificadas. El esquema del mapa no está a escala ni señala domicilios.

## Archivos para editar

- `index.html`: estructura y carga de recursos.
- `assets/styles.css`: diseño, colores y adaptación a pantallas.
- `assets/data.js`: catálogo inicial, municipios y categorías.
- `assets/app.js`: navegación, renderizado y lógica de los formularios.
- `assets/*.jpg`: fotografías locales de referencia.
- `index.php`: entrada opcional para PHP local; no necesaria en Pages.

Si cambias `data.js` después de haber probado el sitio, usa “Acerca de la demo > Restablecer todos los datos” para volver a cargar los datos iniciales. Esto elimina las cuentas y cambios creados en ese navegador.

## Recursos visuales

Fotografías ilustrativas obtenidas de Unsplash e incluidas localmente para que el catálogo no dependa de la carga externa de imágenes. Identificadores de origen:

- Carpintería: https://images.unsplash.com/photo-1504148455328-c376907d081c
- Electricidad: https://images.unsplash.com/photo-1621905251189-08b45d6a269e
- Herrería y soldadura: https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122
- Plomería: https://images.unsplash.com/photo-1607472586893-edb57bdc0e39
- Pintura: https://images.unsplash.com/photo-1562259949-e8e7689d7828

Tipografías DM Sans y Manrope desde Google Fonts, con alternativa sans-serif si no hay internet. Cartografía opcional © colaboradores de OpenStreetMap: https://www.openstreetmap.org/copyright

## Comprobaciones realizadas

Se revisó la sintaxis de JavaScript y se probó en navegador: navegación principal, login de ambas cuentas de ejemplo, búsqueda sin acentos, apertura de perfiles, favoritos, creación y recepción de solicitud, cambio de estado, edición del precio y selección de municipios en el mapa esquemático. El registro utiliza validación nativa y comprobación de correos duplicados y coincidencia de contraseñas. No se verificó la ejecución de PHP en este entorno ni la publicación dentro de tu cuenta de GitHub.
