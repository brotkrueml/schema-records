<?php

declare(strict_types=1);

/*
 * This file is part of the "schema_records" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\SchemaRecords\Service;

/*
 * This file is part of the "schema_records" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

final class TypeListService
{
    public function getTcaList(array $config): array
    {
        $types = (new PresetsProvider())->getTypes($config['row']['pid']);

        \array_walk($types, static function (&$type) {
            $type = [$type, $type];
        });

        $config['items'] = \array_merge($config['items'], $types);

        return $config;
    }
}
