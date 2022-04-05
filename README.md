# API para test XHash

## Pasos del desarrollo
Se creo un controlador para recibir la peticion API
El controlador recibe `zip_code` como parametro
Si no no viene el código zip envia un error `404 NotFoundHttpException`
Si no pilla el código zip enviado en la base de dato lo busca en la pagina proporcionada
Si lo encuentra, es agregado a la registro de la base de datos.
Si no hay devolucion de la pagina externa envia un mensaje de error `404 código zip no encontrado`

Se creo un modelo para guardar los códigos zip nuevos 
Se creo un middleware para validar que la peticion inlcuya la cabecera `Accept: application/json` en peticiones GET.
Se creo un recurso para devolve el objeto desde la base de datos.
Se manejan algunas excepciones desde la clase `Handler`

- GET /api/zip-codes/{zip_code} HTTP/1.1
- Host: api-xhash.test
- User-Agent: insomnia/2022.2.1
- Accept: application/json