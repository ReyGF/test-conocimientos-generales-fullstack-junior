# **Estructura de un proyecto tipico de Symfony**

# Carpetas:

- bin: donde esta la consola de Symfony
- config: donde se guardan rutas, servicios, email, paquetes de seguridad etc
- pubic: donde se encuetra el archivo principal index.php, documentos html, css, js y todo lo que este en la vista publica
- src: donde esta la logica de programacion como controladores, entidades y migraciones
- templates: donde se reciben lo que devueleven los controladores y se organiza para enviarlos a la vista
- test: carpeta para los test

# Ficheros:

- .env: donde se guardan las url y las conexiones a base de datos
- composer.json: donde se guardan todas las dependencias que necesita Symfony
