<?php

namespace Controllers;

use Classes\Paginacion;
use Model\Ponente;
use MVC\Router;
use Intervention\Image\ImageManagerStatic as Image;

class PonentesController {

    public static function index(Router $router) {
        if (!is_admin()) {
            header("Location: /login");
        }

        $pagina_actual = $_GET["page"];
        $pagina_actual = filter_var($pagina_actual, FILTER_VALIDATE_INT);

        if (!$pagina_actual || $pagina_actual < 1) {
            header("Location: /admin/ponentes?page=1");
        }
        
        $registros_por_pagina = 5;
        $total = Ponente::total();
        $paginacion = new Paginacion($pagina_actual, $registros_por_pagina, $total);

        if ($paginacion->total_paginas() < $pagina_actual) {
            header("Location: /admin/ponentes?page=1");
        }

        $ponentes = Ponente::paginar($registros_por_pagina, $paginacion->offset());


        $router->render('admin/ponentes/index', [
            'titulo' => 'Clientes',
            'ponentes' => $ponentes,
            'paginacion' => $paginacion->paginacion()
        ]);
    }

    public static function crear(Router $router) {
        if (!is_admin()) {
            header("Location: /login");
        }
        $alertas = [];
        $ponente = new Ponente;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!is_admin()) {
                header("Location: /login");
            }
            //leer imagen
            if (!empty($_FILES['image']['tmp_name'])) {
                $carpeta_imagenes = '../public/img/speakers';

                //Crear la carpeta
                if (!is_dir($carpeta_imagenes)) {
                    mkdir($carpeta_imagenes, 0777, true);
                }

                $image_png = Image::make($_FILES['image']['tmp_name'])->fit(800,800)->encode('png', 80);
                $image_webp = Image::make($_FILES['image']['tmp_name'])->fit(800,800)->encode('webp', 80);

                $image_name = md5(uniqid(rand(), true));

                $_POST['image'] = $image_name;
            }

            $_POST['socials'] = json_encode($_POST['socials'], JSON_UNESCAPED_SLASHES);

            $ponente->sincronizar($_POST);
        }

        //Validar
        $alertas = $ponente->validar();

        //Guardar el registro
        if (empty($alertas)) {
            
            //Guardar las imagenes
            $image_png->save($carpeta_imagenes . "/" . $image_name . ".png");
            $image_webp->save($carpeta_imagenes . "/" . $image_name . ".webp");

            //Guardar en DB
            $resultado = $ponente->guardar();

            if ($resultado) {
                header("Location: /admin/ponentes");
            }
        }

        $router->render('admin/ponentes/crear', [
            'titulo' => 'Registrar ponente',
            'alertas' => $alertas,
            'ponente' => $ponente,
            'socials' => json_decode($ponente->socials)
        ]);
    }

    public static function editar(Router $router) {
        if (!is_admin()) {
            header("Location: /login");
        }

        $alertas = [];
        
        //Validar Id
        $id = $_GET["id"];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if (!$id) {
            header("Location: /admin/ponentes");
        }

        //Obtener poenente
        $ponente = Ponente::find($id);

        if (!$ponente) {
            header("Location: /admin/ponentes");
        }

        $ponente->actual_image = $ponente->image;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!is_admin()) {
                header("Location: /login");
            }
            //leer imagen
            if (!empty($_FILES['image']['tmp_name'])) {
                $carpeta_imagenes = '../public/img/speakers';

                //Crear la carpeta
                if (!is_dir($carpeta_imagenes)) {
                    mkdir($carpeta_imagenes, 0777, true);
                }

                $image_png = Image::make($_FILES['image']['tmp_name'])->fit(800,800)->encode('png', 80);
                $image_webp = Image::make($_FILES['image']['tmp_name'])->fit(800,800)->encode('webp', 80);

                $image_name = md5(uniqid(rand(), true));

                $_POST['image'] = $image_name;
            } else {
                $_POST["image"] = $ponente->actual_image;
            }
            $_POST['socials'] = json_encode($_POST['socials'], JSON_UNESCAPED_SLASHES);
            $ponente->sincronizar($_POST);

            $alertas = $ponente->validar();

            if (empty($alertas)) {
                if(isset($image_name)) {
                    $image_png->save($carpeta_imagenes . "/" . $image_name . ".png");
                    $image_webp->save($carpeta_imagenes . "/" . $image_name . ".webp");
                }

                $resultado = $ponente->guardar();

                

                if ($resultado) {
                    header("Location: /admin/ponentes");
                }
            }

        }

        $router->render('admin/ponentes/editar', [
            'titulo' => 'Actualizar ponente',
            'alertas' => $alertas,
            'ponente' => $ponente,
            'socials' => json_decode($ponente->socials)
        ]);
    }

    public static function eliminar() {
        if (!is_admin()) {
            header("Location: /login");
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!is_admin()) {
                header("Location: /login");
            }
            $id = $_POST["id"];
            $ponente = Ponente::find($id);

            if (!isset($ponente)) {
                header("Location: /admin/ponentes");
            }

            if ($ponente->image) {
                $carpeta_imagenes = '../public/img/speakers';
                unlink($carpeta_imagenes . '/' . $ponente->image . ".png");
                unlink($carpeta_imagenes . '/' . $ponente->image . ".webp");
            }

            $resultado = $ponente->eliminar();

            if ($resultado) {
                header("Location: /admin/ponentes");
            }
        }
    }
}