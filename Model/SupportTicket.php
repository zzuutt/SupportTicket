<?php
/**
* This class has been generated by TheliaStudio
* For more information, see https://github.com/thelia-modules/TheliaStudio
*/

namespace SupportTicket\Model;

use SupportTicket\Model\Base\SupportTicket as BaseSupportTicket;

/**
 * Class SupportTicket
 * @package SupportTicket\Model
 */
class SupportTicket extends BaseSupportTicket
{
    const STATUS_NEW = 0;
    const STATUS_REPLIED = 1;
    const STATUS_CLOSED = 2;
}
