<?php

namespace app\models\forms;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class CodigosWebForm extends Model {

    public $tipo;
    public $codigo;
    public $descripcion;
    public $img;

    public function rules() {
        return [
            [['tipo'], 'required', 'message' => 'Debe elegir el tipo del código'],
            [['descripcion'], 'required', 'message' => 'Debe ingresar la descripción'],
            [['img'], 'required', 'message' => 'Debe ingresar una imagen'],
            [['img'], 'file'],
            [['codigo'], 'string'],
        ];
    }

}
