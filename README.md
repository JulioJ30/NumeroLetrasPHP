# Numeros A Letras

Convierte un número a su valor correspondiente en letras.

# Instalación

## 1. Agrega jja/numero-a-letras a tu archivo composer.json.

{
    "require": {
        "jja/numero-a-letras": "dev-master"
    }
}

## 2. USO

    require_once "vendor/autoload.php";
    $obj = new \lic\NumLetras\NumeroLetras();
    echo $obj->ConvertirNumLet(562);
    
    Retorna QUINIENTOS SESENTA Y DOS
    
    PARA AGREGAR MONEDAS Y CENTAVOS
    
    echo $obj->ConvertirNumLet(562.30,"soles",true);
    Retorna QUINIENTOS SESENTA Y DOS SOLES CON 30/100 CENTIMOS
