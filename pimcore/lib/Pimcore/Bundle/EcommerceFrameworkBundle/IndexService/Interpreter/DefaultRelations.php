<?php
/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace Pimcore\Bundle\EcommerceFrameworkBundle\IndexService\Interpreter;

use Pimcore\Model\DataObject\Data\ObjectMetadata;
use Pimcore\Model\Element\AbstractElement;
use Pimcore\Model\Element\Service;

class DefaultRelations implements IRelationInterpreter
{
    public function interpret($value, $config = null)
    {
        $result = [];

        if ($value instanceof ObjectMetadata) {
            $value = $value->getObject();
        }

        if (is_array($value)) {
            foreach ($value as $v) {
                if ($v instanceof ObjectMetadata) {
                    $v = $v->getObject();
                }

                $result[] = ['dest' => $v->getId(), 'type' => Service::getElementType($v)];
            }
        } elseif ($value instanceof AbstractElement) {
            $result[] = ['dest' => $value->getId(), 'type' => Service::getElementType($value)];
        }

        return $result;
    }
}
