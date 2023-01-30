<?php

namespace BalatD\FriendlyCaptcha\Domain\Validator;

use BalatD\FriendlyCaptcha\Validation\FriendlyCaptchaValidator;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class ServersideValidator extends \In2code\Femanager\Domain\Validator\ServersideValidator
{

    /**
     * @param $value
     * @param $validationSetting
     * @return bool
     */
    protected function validateFriendlyCaptcha($value, $validationSetting): bool
    {
        $validator = GeneralUtility::makeInstance(FriendlyCaptchaValidator::class);
        return !$validator->validate($value)->hasErrors();
    }
}