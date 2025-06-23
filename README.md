# Proyecto Turbina5 - E-commerce de Inversiones Rapel SpA
Sitio E-commerce de Artículos Deportivos desarrollado sobre la plataforma WordPress y WooCommerce.



# ❯ Descripción del Proyecto
Este repositorio contiene el código fuente y los activos del sitio web e-commerce para Inversiones Rapel SpA, operando bajo el nombre comercial Turbina5. La plataforma está especializada en la venta de artículos deportivos, ofreciendo un catálogo completo, carrito de compras y un proceso de pago seguro e integrado.

El sitio fue construido utilizando WordPress como CMS y WooCommerce como motor de comercio electrónico, permitiendo una gestión de contenido y productos robusta y escalable.

Tabla de Contenidos
Funcionalidades Principales
Tecnologías y Herramientas
Instalación Local
Estructura del Repositorio
Licencia

# ❯ Funcionalidades Principales
Catálogo de Productos: Sistema de productos con categorías, etiquetas, filtros y búsqueda avanzada.
Carrito de Compras y Checkout: Flujo de compra completo, desde añadir productos al carrito hasta la finalización del pedido.
Integración con Pasarelas de Pago: Conectado con servicios de pago relevantes para el mercado chileno (ej. Transbank Webpay Plus).
Gestión de Cuentas de Usuario: Los clientes pueden registrarse, ver su historial de pedidos y gestionar sus direcciones.
Diseño Responsivo: Experiencia de usuario optimizada para dispositivos móviles, tablets y computadores de escritorio.
Blog/Sección de Noticias: Para marketing de contenidos y comunicación con los clientes.

# ❯ Tecnologías y Herramientas
Este proyecto fue construido utilizando un stack tecnológico moderno basado en el ecosistema de WordPress:

Plataforma Base:
Motor E-commerce:
Tema: Tema hijo personalizado Turbina5 Child-Theme para garantizar la seguridad y facilidad de actualización.
Plugins Clave:
Transbank Webpay Plus: Para la integración de pagos.
Yoast SEO: Para la optimización en motores de búsqueda.
Contact Form 7: Para formularios de contacto.
WP Rocket / W3 Total Cache: Para la optimización del rendimiento y velocidad de carga.
Frontend: HTML5, CSS3, JavaScript (ES6+).
Entorno de Desarrollo: Desarrollado inicialmente con LocalWP.
Control de Versiones: y .

# ❯ Instalación Local
Para levantar una copia de este proyecto en un entorno de desarrollo local, sigue estos pasos:

Prerrequisitos:

Un entorno de servidor local (ej. LocalWP, XAMPP, MAMP).
Acceso a una base de datos MySQL o MariaDB.
Git instalado en tu sistema.
Pasos:

Clonar el repositorio:

Bash

git clone git@github.com:iBenjaah/Turbina5_Demo.git
Base de Datos:
Este repositorio no incluye la base de datos por razones de seguridad y tamaño. Necesitarás un archivo de respaldo .sql de la base de datos de producción o staging para importarlo en tu gestor de bases de datos local (ej. phpMyAdmin, Sequel Pro).

Configurar wp-config.php:
El archivo wp-config.php está intencionalmente excluido del repositorio (vía .gitignore).

Crea una copia del archivo wp-config-sample.php y renómbrala a wp-config.php.
Edita wp-config.php con las credenciales de tu base de datos local: DB_NAME, DB_USER, DB_PASSWORD, DB_HOST.
Actualizar URLs en la Base de Datos:
Una vez importada la base de datos, es probable que las URLs sigan apuntando al dominio de producción. Usa un plugin como Better Search Replace para buscar la URL antigua (ej. https://www.turbina5.cl) y reemplazarla con tu URL local (ej. http://turbina5.local).

¡Ahora deberías poder acceder al sitio desde tu entorno local!

# ❯ Estructura del Repositorio
El control de versiones se centra en la carpeta wp-content, ya que el núcleo de WordPress y los plugins de terceros se gestionan por separado.

/app/public/wp-content/themes/turbina5-child-theme/: Aquí reside todo el código personalizado del diseño, plantillas, estilos (CSS) y funcionalidades (JavaScript) del sitio.
/app/public/wp-content/plugins/plugin-personalizado/: (Si aplica) Contiene plugins desarrollados específicamente para este proyecto.
.gitignore: Archivo crucial que excluye el núcleo de WordPress, archivos de respaldo, la carpeta uploads, y archivos sensibles como wp-config.php del control de versiones.

# ❯ Licencia
Este proyecto es propiedad de Inversiones Rapel SpA.

Creado y gestionado por Benjamín.