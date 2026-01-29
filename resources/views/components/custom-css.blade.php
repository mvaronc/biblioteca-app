<style>

 /* Estilo general para el cuerpo de la página  que por defecto heredan todos los demás componentes. Intentaremos que esté distribuido en bloques de cabecera, navegacion, contenido y pie de página, de forma que cada uno ocupe su espacio, sin pisar el otro*/
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        color: #333;
    }
    header {
        background-color: #35424a;
        color: #ffffff;
        padding: 20px 0;
        text-align: center;
    }
    nav {
        background-color: #e8491d;
        color: #ffffff;
        padding: 15px;
        text-align: center;
    }
    nav a {
        color: #ffffff;
        margin: 0 15px;
        text-decoration: none;
        font-weight: bold;
    }
    nav a:hover {
        background-color: #f4f4f4;
        color :darkorange;
        padding: 5px;
        border-radius: 5px;
    }
    main {
        padding: 20px;
        min-height: 400px;
    }
    footer {
        background-color: #35424a;
        color: #ffffff;
        text-align: center;
        padding: 10px 0;
        position: relative;
        bottom: 0;
        width: 100%;
    }
    /* Estilos específicos para formularios */
    form {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 600px;
        margin: auto;
    }
    label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
    }
    input[type="text"], select {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    button {
        background-color: #35424a;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }
    button:hover {
        background-color: #e8491d;
    }   
 
</style>