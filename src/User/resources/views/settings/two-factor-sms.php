<?php
/*
* This file is part of the 2amigos/yii2-usuario-app project.
*
* (c) 2amigOS! <http://2amigos.us/>
*
* For the full copyright and license information, please view
* the LICENSE file that was distributed with this source code.
*/

/** @var string $id */

?>

<div class="alert alert-info" id="tfmessage">
    <p>
        <?= Yii::t(
            'usuario',
            'Enter the Telephone number and Fill the Code'
        ) ?>
    </p>
</div>

<div class="row">
    <div class="col-md-offset-3 col-md-6 text-center">
    </div>
</div>
<div class="row">
    <div class="col-md-offset-3 col-md-6 text-center">
        <div class="input-group">
            <input type="text" class="form-control" id="telefone-number" placeholder="<?= Yii::t('usuario', 'Telephone Number') ?>"/>
            <span class="input-group-btn">
                <button type="button" class="btn btn-primary btn-submit-send-sms">
                    <?= Yii::t('usuario', 'Send sms') ?>
                </button>
            </span>
        </div>
        <hr>
        <div class="input-group">
            <input type="text" class="form-control" id="tfcode" placeholder="<?= Yii::t('usuario', 'Two factor authentication code') ?>"/>
            <span class="input-group-btn">
                <button type="button" class="btn btn-primary btn-submit-code-sms">
                    <?= Yii::t('usuario', 'Enable') ?>
                </button>
            </span>
        </div>

    </div>
</div>
