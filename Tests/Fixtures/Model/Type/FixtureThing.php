<?php
declare(strict_types = 1);

namespace Brotkrueml\SchemaRecords\Tests\Fixtures\Model\Type;

use Brotkrueml\Schema\Core\Model\AbstractType;

final class FixtureThing extends AbstractType
{
    protected $properties = [
        'date' => null,
        'description' => null,
        'flag' => null,
        'image' => null,
        'name' => null,
        'url' => null,
    ];
}
