import os

def crear_estructura(base, estructura):
    for nombre, contenido in estructura.items():
        ruta = os.path.join(base, nombre)
        if isinstance(contenido, dict):  # Es un directorio
            os.makedirs(ruta, exist_ok=True)
            crear_estructura(ruta, contenido)
        else:  # Es un archivo
            with open(ruta, 'w') as archivo:
                archivo.write(contenido)

estructura = {
    'proyecto': {
        'app': {
            'controllers': {'HomeController.php': ''},
            'models': {'UserModel.php': ''},
            'views': {'home.php': '', 'login.php': ''}
        },
        'core': {'Controller.php': '', 'Model.php': '', 'App.php': ''},
        'public': {
            'index.php': '',
            'css': {},
            'js': {},
            'images': {}
        },
        'config': {'config.php': ''},
        'lib': {'Database.php': ''}
    }
}

if __name__ == "__main__":
    base_path = '.'  # Cambia '.' por la ruta donde deseas crear la estructura
    crear_estructura(base_path, estructura)
    print("Directorios y archivos creados con éxito.")
