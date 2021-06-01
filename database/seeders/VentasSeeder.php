<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Compras;
use App\Models\Productos;

class VentasSeeder extends Seeder
{
    /**
     * Run the database seeds.  
     *
     * @return void
     */
    public function run()
    {
        
        $productos = new Productos();
        $productos->idProducto = 1;
        $productos->producto = "Alcohol 90º 750ml";
        //$productos->descripcion = "Alcohol Antiséptico de 90º Carosa";
        //$productos->image = "http://www.farmaciaseconomicaselsalvador.com/pub/media/catalog/product/cache/217f71d15c47b26bf472c6620ca21934/a/l/alcoholantisep_f750ml_carosa.jpg";
        $productos->precio = "4.00";
        $productos->save();

        $productos = new Productos();
        $productos->idProducto = 2;
        $productos->producto = "Alcohol Gel Savon 500ml";
        //$productos->descripcion = "Gel antibacterial, humectante y sin aroma. Elimina el 99.9% de los gérmenes.";
        //$productos->image = "https://www.farmaciaseconomicaselsalvador.com/pub/media/catalog/product/cache/a567757555f0b5a9658af80e8ff7bdd5/a/l/alcohol_gel_savon_500ml3.jpg";
        $productos->precio = "2.50";
        $productos->save();

        $productos = new Productos();
        $productos->idProducto = 3;
        $productos->producto = "AERIUS 5MG X 1 TABLETA";
        //$productos->descripcion = "Medicamento antialérgico que no produce somnolencia. Ayuda a controlar la reacción alérgica y sus síntomas.";
        //$productos->image = "https://colsubsidio.vteximg.com.br/arquivos/ids/157476-1200-1200/7702502011210.jpg?v=637108447498570000";
        $productos->precio = "1.99";
        $productos->save();

        $productos = new Productos();
        $productos->idProducto = 4;
        $productos->producto = "AMOXICILINA L.S. 500MG X 1 CAPSULA";
        //$productos->descripcion = "Antibiotico oral. Es una penicilina semisintética, sensible a la penicilinasa de amplio espectro, es bactericida y actúa inhibiendo la biosíntesis del mucopéptido de la pared celular bacteriana.";
        //$productos->image = "https://lh3.googleusercontent.com/proxy/y1cLSxo6EGTp1A_6IlxWn_ZMJIh9IbdqxxxWcrjVfdw2334MJFw08o5wqS5Pp3I0Q_g5JbE70jwtgiuo0hQ6nVw2OBF-1k0-KCBl8QULWFmn6k3Ra1HK-I2Jt737HsxpP9E9hmdcp8G3h6vxgyuI8yjMlrnATyfzUQ";
        $productos->precio = "0.25";
        $productos->save();

        $productos = new Productos();
        $productos->idProducto = 5;
        $productos->producto = "LORATADINA LS 10MG X 1 TABLETA";
        //$productos->descripcion = "Para el alivio de los síntomas asociados con rinitis, estornudos frecuentes, secreción nasal, picazón nasal y ojos. Casos de urticaria aguda o crónica y alergias cutáneas, respiratorias y picaduras de insectos.";
        //$productos->image = "http://www.farmaciasannicolas.com/Producto/GetImagenPrincipalProducto/47e57071-6abe-4ef4-b103-0597e0e94577";
        $productos->precio = "0.50";
        $productos->save();

        $productos = new Productos();
        $productos->idProducto = 6;
        $productos->producto = "ACIMED 15MG X 1 SOBRE DE 2 CAPSULAS";
        //$productos->descripcion = "Medicamento para acidez, gases y reflujo. Acimed contiene como principio activo Lanzoprazol 15mg";
        //$productos->image = "http://www.farmaciasannicolas.com/Producto/GetMultimediaProducto?idProducto=ff28535c-7551-4c79-88e6-3cc2e0dfa111&idMultimedia=99e64f05-1f39-44e0-910c-3f95e3886965";
        $productos->precio = "0.50";
        $productos->save();

        $productos = new Productos();
        $productos->idProducto = 7;
        $productos->producto = "ABRILAR JARABE FRASCO X 100 ML";
        //$productos->descripcion = "Extracto de Hedera hélix, eficacia en el tratamiento de las afecciones respiratorias altas y bajas.";
        //$productos->image = "https://farmaciasannicolas.com/Producto/GetMultimediaProducto?idProducto=2d99793a-f325-431c-9969-ffee8e4ccfcc&idMultimedia=75dba867-000d-4b3f-8f71-eecbb53c2e56";
        $productos->precio = "12.99";
        $productos->save();

        $productos = new Productos();
        $productos->idProducto = 8;
        $productos->producto = "Mascarilla KN95 Unidad";
        //$productos->descripcion = "Protege de la exposición a partículas en el aire. En un entorno de atención médica, protege de la exposición a aerosoles biológicos, incluidos virus y bacterias. No contiene látex.";
        //$productos->image = "https://cdn.lumingo.com/medias/0100499795-000000000004700320-0-c515Wx515H?context=bWFzdGVyfGltYWdlc3wxMDA5NTV8aW1hZ2UvcG5nfGltYWdlcy9oMjMvaDViLzkxNjUyNzYyMTczNzQucG5nfDhiYzg4YzYyOGVmYjFhYzRmNTA0NzhhZTg2OTVkNDVjYmUyMThmYmUxZDM1NzQ5NGVlYmUxZDM3MjEzZDYyNzE";
        $productos->precio = "1.89";
        $productos->save();
        
        //$productos = new Productos();
        //$productos->nombreproducto = "";
        //$productos->descripcion = "";
        //$productos->image = "";
        //$productos->precio = "";
        //$productos->save();
    }
}
