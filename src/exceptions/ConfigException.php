<?php
/**
 * @link https://github.com/archaron/yii2-notisend
 * @copyright Copyright (c) 2021 Alexander Tischenko (tsm@archaron.ru)
 * @license https://github.com/archaron/yii2-notisend/blob/main/LICENSE
 */

namespace archaron\notisend\exceptions {
    /**
     * Config exception represents an exception that is caused by wrong config.
     * @since 1.0
     */
    class ConfigException extends BaseException
    {
        /**
         * @return string the user-friendly name of this exception
         */
        public function getName()
        {
            return 'NotiSend config exception';
        }
    }
}
