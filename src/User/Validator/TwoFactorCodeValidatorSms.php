<?php

/*
 * This file is part of the 2amigos/yii2-usuario project.
 *
 * (c) 2amigOS! <http://2amigos.us/>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Da\User\Validator;

use Da\TwoFA\Exception\InvalidSecretKeyException;
use Da\TwoFA\Manager;
use Da\User\Contracts\ValidatorInterface;
use Da\User\Model\User;

class TwoFactorCodeValidatorSms implements ValidatorInterface
{
    protected $user;
    protected $code;
    protected $cycles;

    /**
     * TwoFactorCodeValidator constructor.
     *
     * @param User $user
     * @param $code
     * @param int $cycles
     */
    public function __construct(User $user, $code, $cycles = 0)
    {
        $this->user = $user;
        $this->code = $code;
    }

    /**
     * @throws InvalidSecretKeyException
     * @return bool|int
     *
     */
    public function validate()
    {
        //verifica esclusivamente che siano uguali il code ed il valore auth_tf
        return !strcmp($this->code,$this->user->auth_tf_key);

    }
}
