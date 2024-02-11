<?php

echo 'Pasando por salida';
session_start(); // Asegúrate de que la sesión está iniciada
session_unset(); // Eliminar todas las variables de sesión
session_destroy(); // Destruir la sesión

header('Location: login'); // Redirigir al usuario a la página de inicio de sesión
exit;
